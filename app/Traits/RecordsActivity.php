<?php

namespace App\Traits;

use App\Events\ActivityLogged;
use ReflectionClass;
use App\Models\Activity;

trait RecordsActivity
{
    /**
     * Register the necessary event listeners.
     *
     * @return void
     */
    protected static function bootRecordsActivity()
    {
        foreach (static::getModelEvents() as $event) {
            static::$event(function ($model) use ($event) {
                $model->recordActivity($event);
            });
        }
    }

    /**
     * Record activity for the model.
     *
     * @param  string $event
     * @return void
     */
    public function recordActivity($event)
    {

        if ($this->getActivityName($this, $event) == "updated_user"){
            $u_id = $this->id;
        }
        elseif($this->getActivityName($this, $event) == "updated_userdetail"){
            $u_id = $this->user_id;
        }
        else{
            $u_id = $this->user_id;
        }

        $activity = Activity::create([
            'subject_id' => $this->id,
            'subject_type' => get_class($this),
            'name' => $this->getActivityName($this, $event),
            'user_id' => $u_id,
            "to_name" => $this->name,
            "body" => $this->body,
        ]);

        broadcast(new ActivityLogged($activity));
    }

    /**
     * Prepare the appropriate activity name.
     *
     * @param  mixed  $model
     * @param  string $action
     * @return string
     */
    protected function getActivityName($model, $action)
    {
        $name = strtolower((new ReflectionClass($model))->getShortName());

        return "{$action}_{$name}";
    }

    /**
     * Get the model events to record activity for.
     *
     * @return array
     */
    protected static function getModelEvents()
    {
        if (isset(static::$recordEvents)) {
            return static::$recordEvents;
        }

        return [
            'created', 'deleted', 'updated'
        ];
    }
}