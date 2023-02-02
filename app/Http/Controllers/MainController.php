<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo il Models "Saint"
use App\Models\Saint;

class MainController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
}