<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ImageUpload;
use Illuminate\Support\Facades\File;

class ImageCreate extends Component
{
    use WithFileUploads;


    public $photo = [];


    public function store()
    {

       if($this->photo){
        $file = $this->photo;
        $ext = $file->getClientOriginalExtension();
        $fileName = time().'.'.$ext;

        $file->move_uploaded_file('uploads/user/',$fileName);
        ImageUpload::Create([
            'name'=>$fileName,
            $takes->path
        ]);
       }


    }
    public function render()
    {
        $take = ImageUpload::all();
        return view('livewire.image-create',compact('take'));
    }
}
