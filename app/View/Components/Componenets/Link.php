<?php

namespace App\View\Components\Componenets;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $url,
        public string $text,
        public string $icon,
        public string $textColor,
        public string $highlightColor,
        )
    {
        $this->icon = null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.componenets.link');
    }
}
