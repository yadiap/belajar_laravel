<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonLink extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $url;
    public string $text;
    public string $color;
    public string $size;

    public function __construct($url="", $text = "Button", $color = "secondary", $size="")
    {
        $this->url = $url;
        $this->text = $text;
        $this->color = $color;
        $this->size = $size;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-link');
    }
}
