<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Photo;
use Livewire\Attributes\Validate;


class ImageCreate extends Component
{
    use WithFileUploads;

    #[Validate('image|max:1024')]
    public $image;

    public function store()
    {
        $validated = $this->validate();
        if($this->image){
           $validated['image'] = $this->image->store('uploads','public');

            Photo::create($validated);
        }
        $this->reset('image');
    }

    public function render()
    {
        $take = Photo::all();
        return view('livewire.image-create',compact('take'));
    }
}
