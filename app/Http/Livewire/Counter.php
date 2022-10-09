<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\User;
use Livewire\Component;


class Counter extends Component
{
    protected $listeners = ['update'];

    public $posts;



    public function mount(){
        $this->posts = Activity::latest()->take(5)->get();
    }

    public function update($posts){
        $this->posts = Activity::latest()->take(5)->get();
    }

    public function render()
    {
        return view('livewire.counter', [
            'posts' => Activity::latest()->take(5)->get(),
        ]);
    }
}