<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.header');
    }
    public $showMenu = "translate-x-[100vw]";
    public $bodyBlur = "";
    public function openMenu(){
        $this->showMenu = "translate-x-[30vw] ";
        $this->bodyBlur = "blur-sm";
    }
     public function closeMenu(){
        $this->showMenu = "translate-x-[100vw] ";
        $this->bodyBlur = "";
    }

}
