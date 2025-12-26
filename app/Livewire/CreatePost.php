<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CreatePost extends Component
{
    public $title='';
    public $content='';
    protected $rules =[
        'title'=>'required|min:3|max:255',
        'content'=>'required|min:10',
    ];
    public function save()
    {
        $this->validate();
        Auth::user()->posts()->create([
            'title'=> $this->title,
            'content'=> $this->content,
        ]);
        session()->flash('message','Post Berhasil Di Buat');
        $this->reset(['title','content']);
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
