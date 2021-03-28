<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;


class CreatePost extends Component
{
    use WithFileUploads;
    public $post;
    public $postId;
    public $action;
    public $button;
    public $featured_image;
    public $is_featured;
    public $is_published;

    protected function getRules()
    {
        $rules = [
            'post.title' => 'required'
        ];

        return  $rules;
    }

    public function createPost ()
    {
        $this->resetErrorBag();
        $this->validate();
        $this->post['user_id'] = Auth::user()->id;
        $this->validate([
            'featured_image' => 'image|max:1024', // 1MB Max
        ]);
            
        $this->post['featured_image']=$this->featured_image->store('photos');
        Post::create($this->post);

        $this->emit('saved');
        $this->reset('post');
    }

    public function updatePost ()
    {
        $this->resetErrorBag();
        $this->validate();
        $this->post['user_id'] = Auth::user()->id;

        Post::query()
            ->where('id', $this->postId)
            ->update($this->post);

        $this->emit('saved');
    }

    public function mount ()
    {
        if (!!$this->postId) {
            $post = Post::find($this->postId);

            $this->post = [
                "title" => $post->title,
            ];
        }

        $this->button = create_button($this->action, "Post");
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
