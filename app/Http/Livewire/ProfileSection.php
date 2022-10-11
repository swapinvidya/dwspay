<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfileSection extends Component
{
    public function update()
    {
        // $validatedDate = $this->validate([
        //     'title' => 'required',
        //     'body' => 'required',
        // ]);
  
        $post = Post::find($this->post_id);
        $post->update([
            'title' => $this->title,
            'body' => $this->body,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Post Updated Successfully.');
        $this->resetInputFields();
    }
   
   
    public function render()
    {
        return view('livewire.profile-section');
    }
}
