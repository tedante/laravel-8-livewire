<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SingleMaterial extends Component
{
    public $item;

    public function mount($item)
    {
        $this->item = (array) $item;
    }

    public function render()
    {
        return view('livewire.single-material');
    }
}
