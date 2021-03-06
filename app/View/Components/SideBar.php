<?php

namespace App\View\Components;

use App\Http\Controllers\PostsController;
use App\Models\Post;
use Illuminate\View\Component;

class SideBar extends Component
{
    public $recentPosts;
    public $categories;
    public $tags;
    public $active;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($recentPosts=null, $tags=null, $categories=null, $active = null)
    {
        $this->recentPosts = $recentPosts;
        $this->categories = $categories;
        $this->tags = $tags;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.side-bar');
    }
}
