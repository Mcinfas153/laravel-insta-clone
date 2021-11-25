<?php

namespace App\Http\Livewire;

use App\Models\PostLike;
use Livewire\Component;

class PostCard extends Component
{

    public $image;
    public $caption;
    public $creator;
    public $profile;
    public $postId;
    public $postLikes;
    public $ownLike;

    public function mount($post)
    {
        $this->postId = $post->id;
        $this->image = $post->image;
        $this->caption = $post->caption;
        $this->postLikes = $post->post_like;
        $this->ownLike = $post->own_like;
        $this->creator = $post->creator->username;
        $this->profile = $post->creator->profile_url;
    }

    public function render()
    {
        return view('livewire.post-card');
    }

    public function like($postId)
    {
        $postLike = new PostLike();
        $postLike->user_id = 12;
        $postLike->post_id = $postId;
        $postLike->save();
    }
}
