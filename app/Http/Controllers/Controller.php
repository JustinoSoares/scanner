<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use LaravelQRCode\Facades\QRCode;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function show()
    {

        return QRCode::meCard(
            "Justino Soares",
            "946671828",
            "justinocsoares123@gmail.com",
            "https://github.com/JustinoSoares",
            "Dev Fullstack",
            "Backend",
        )->svg();
    }
}
