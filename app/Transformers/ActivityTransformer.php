<?php

namespace App\Transformers;

use App\Models\Activity;
use League\Fractal\TransformerAbstract;

class ActivityTransformer extends TransformerAbstract
{
	public function transform(Activity $activity)
	{
		return [
			"description" => call_user_func_array([$this, $activity->name], [$activity]),
			"lapse" => $activity->created_at->diffForHumans(),
			"user" => $activity->user_id,
			
		];
	}

	protected function created_task(Activity $activity)
	{
		return $activity->user->name . " created a task, " . $activity->subject->title;
	}

	protected function created_comment(Activity $activity)
	{
		return $activity->name . " left a comment on the task, " . $activity->subject->task->title;
	}

    protected function created_email(Activity $activity)
	{
		return $activity->name . " left an email, " . $activity->subject_type;
	}

	protected function updated_user(Activity $activity)
	{
		return $activity->name . " Updated user Details, " . $activity->subject_type;
	}

	protected function updated_userdetail(Activity $activity)
	{
		return $activity->name . " Updated user Details, " . $activity->subject_type;
	}
}