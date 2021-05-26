<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class annonceController extends Controller
{
    public function index()
    {
        return view('annonce');
    }
}
