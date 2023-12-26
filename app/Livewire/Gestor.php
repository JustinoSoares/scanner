<?php

namespace App\Livewire;

use Livewire\Component;

class Gestor extends Component
{
    public $addMenu="translate-x-[100vw]";
    public function render()
    {
        return view('livewire.gestor');
    }
    public function menu()
    {
        $this->addMenu = "translate-x-[50vw]";

    }
}
