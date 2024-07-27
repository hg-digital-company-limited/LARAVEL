<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class PostCrud extends Component
{
    use WithPagination;

    public $title, $content, $postId;
    public $isEditMode = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.post-crud', [
            'posts' => Post::paginate(10),
        ]);
    }

    public function store()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->resetFields();
        session()->flash('message', 'Post created successfully.');
    }

    public function edit($id)
    {
        $this->isEditMode = true;
        $post = Post::find($id);
        $this->postId = $post->id;
        $this->title = $post->title;
        $this->content = $post->content;
    }

    public function update()
    {
        $this->validate();

        $post = Post::find($this->postId);
        $post->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->resetFields();
        session()->flash('message', 'Post updated successfully.');
    }

    public function delete($id)
    {
        Post::destroy($id);
        session()->flash('message', 'Post deleted successfully.');
    }

    private function resetFields()
    {
        $this->title = '';
        $this->content = '';
        $this->postId = null;
        $this->isEditMode = false;
    }
}
