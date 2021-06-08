<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SourceCardSlim extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $source;

    public function __construct($source)
    {
        //
        $this->source=$source;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.source-card-slim');
    }
}
