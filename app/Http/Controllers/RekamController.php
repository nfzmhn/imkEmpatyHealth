<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RekamController extends Controller
{
    public function rekammedis() {
        return view('rekammedis');
    }
}
