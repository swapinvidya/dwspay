<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileUpdate extends Component
{
    public $name, $email;

    protected $rules = [
        'name'  => 'required|string|min:5',
        'email' => 'required|email|max:500|unique:users',
    ];

    public function mount()
    {
        $this->user = Auth::user();
    }
   
    public function render()
    {
        return view('livewire.profile-update');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function update(){
        $validatedData = $this->validate();
        User::findOrFail($this->user->id)->update($validatedData);
    }
    
}
