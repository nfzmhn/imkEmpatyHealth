<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KomunitasController extends Controller
{
    public function komunitasonline() {
        return view('komunitasonline');
    }
}
