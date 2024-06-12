<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelQRCode\Facades\QRCode;

class qrCodeController extends Controller
{
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
