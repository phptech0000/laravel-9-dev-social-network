<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class EditPost extends Component
{

    use WithFileUploads;

    public $body, $coverImage, $title, $idPost;
    // 'coverImage' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
    public function mount($post)
    {
        $this->idPost = $post->id;
        $this->body = $post->body;
        $this->title = $post->title;
    }
    protected $rules = [
        'body' => 'required',
        'title' => 'required',
        'coverImage.*' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.edit-post');
    }

    public function updatePost()
    {

        try {
            $this->validate();

            Post::where('id', $this->idPost)->update([
                'body' => $this->body,
                'title' => $this->title,
            ]);

            Image::where('post_id', $this->idPost)->delete();
            foreach ($this->coverImage as  $image) {
                Image::create([
                    'image' => $image->store('images', 'public'),
                    'post_id' => $this->idPost
                ]);
            }

            $this->reset();
            session()->flash('success', 'Post Atualizado');
            return redirect(route('my.posts'));
        } catch (\Exception $e) {

            session()->flash('danger', 'Erro ao atualizar post');
            return redirect(route('my.posts'));
        }


        return redirect()->route('my.posts');
    }
}
