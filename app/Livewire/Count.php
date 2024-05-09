<?php

namespace App\Livewire;

use Livewire\Component;

class Count extends Component
{
    public ?string $name = "Bruno";

    public function render()
    {
        return view('livewire.count');
    }
}
