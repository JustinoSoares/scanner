<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    use HasFactory;

    protected $fillable =[
        "photo"
    ];
     protected $table = "uploads";
}
