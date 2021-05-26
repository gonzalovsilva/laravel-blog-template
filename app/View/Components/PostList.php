<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostList extends Component
{
    public $posts;
    public $pagination;
    public $details;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($posts = null, $pagination = false, $details = false)
    {

        $this->posts = $posts;
        $this->pagination = $pagination;
        $this->details = $details;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post-list');
    }
}
