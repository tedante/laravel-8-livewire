<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\MaterialController;
use App\Models\Material;

class IndexMaterial extends Component
{
    public function getAll()
    {
        $data = new MaterialController();
        return $data->index();
    }

    public function render()
    {
        $data = $this->getAll()->getData();
        return view('livewire.index-material', [
            'data' => $data
        ]);
    }
}
