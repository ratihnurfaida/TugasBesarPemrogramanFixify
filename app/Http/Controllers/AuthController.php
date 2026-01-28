<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() 
    {
        return view('welcome');
        return view('tentang');
        return view(view: 'layanan');
        return view('kontak');
        return view('pricelist');
        return view('dashboard');
    }
}
