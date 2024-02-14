<?php

namespace App\Livewire\Main;

use Livewire\Attributes\Layouts;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Layout('main.layouts.app')]
    #[Title('Willjack System')]
    public function render()
    {
        return view('livewire.main.index');
    }
}
