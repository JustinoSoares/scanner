<?php

namespace App\Http\Controllers;

use App\Models\upload;
use Exception;
use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;

class uploadController extends Controller
{
    public $armazenarImagem;
    public function __construct(){
        return $this->armazenarImagem;
    }

    public function uploadImagem(Request $request)
    {


        try {
            $request->validate([
                'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Exemplo: 2 MB de tamanho máximo
            ]);
            $imagem = $request->file('imagem');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalExtension();
            $caminho = "uploads/". $nomeImagem;
            $imagem->move(public_path("uploads/"), $nomeImagem);

            $this->armazenarImagem = upload::create([
                "photo" => $caminho,
            ]);

            //pegar o valor da imagem
            $ocr = new TesseractOCR();
            $ocr->image($this->armazenarImagem->photo);
            $ocr->lang('por'); // Configura o idioma para português
            $texto = $ocr->run();
            $linhas = explode(PHP_EOL, $texto);

            session()->flash('success', 'A imagem é válida!');

             return view("inicio",[
                "imagem" => $this->armazenarImagem->photo,
                "texto" => $texto,
                "linhas" => $linhas,
             ]);
        } catch (Exception $th) {
            // echo $th->getMessage();
            session()->flash('error', 'Parece que a imagem não contem texto!');
            return view("inicio",[
                "error" => "Parece que houve uma confusão no tipo de arquivo enviado ou o Teu arquivo está sem escrita"
            ]);
        }
    }
}
