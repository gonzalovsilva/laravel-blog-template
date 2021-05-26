<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OwlCarousel extends Component
{
    public $randomPosts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($randomPosts = null)
    {
        $this->randomPosts = $randomPosts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.owl-carousel');
    }
}
