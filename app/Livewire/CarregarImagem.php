<?php

namespace App\Livewire;

use App\Http\Controllers\uploadController;
use App\Models\upload;
use Livewire\Component;
use Livewire\WithFileUploads;
use thiagoalessio\TesseractOCR\TesseractOCR;

class CarregarImagem extends Component
{
    use WithFileUploads;
    public $imagem;
    public $texto;

    public function render()
    {
        return view('livewire.carregar-imagem');
    }
}
