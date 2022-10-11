<?php

namespace App\Http\Livewire;

use App\Models\userDetail;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProfileDetails extends Component
{
    public $mobile, $address, $user_id;

    protected $rules = [
        'mobile' => 'required' ,
        'address'=> 'required'
    ];

    public function mount(){
        $this->user_id = Auth::id();
    }
    
    public function render()
    {
        return view('livewire.profile-details');
    }

    public function updated($propertyName)
    {

        $this->validateOnly($propertyName);
    }

    public function update(){
        $validatedData = $this->validate();
        userDetail::updateOrCreate(['user_id'=> $this->user_id], $validatedData);

    }
}
