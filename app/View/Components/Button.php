<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $text;
    public string $color;
    public string $size;
    public string $type;
    public string $class;

    public function __construct($text = "Button", $color = "primary", $size="", $type="button", $class="")
    {
        $this->text = $text;
        $this->color = $color;
        $this->size = $size;
        $this->type = $type;
        $this->class = $class;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
