<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InformasiController extends Controller
{
    public function informasi() {
        return view('informasi');
    }
}