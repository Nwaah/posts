<?php

namespace App\View\Components;

use App\Models\Post as ModelsPost;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Post extends Component
{
    public $user_id, $content, $id, $user_name;
    /**
     * Create a new component instance.
     */
    public function __construct(ModelsPost $post)
    {
        $this->user_name = $post->user->name;
        $this->user_id = $post->user_id;
        $this->content = $post->content;
        $this->id = $post->id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post', ["post" => $this]);
    }
}
