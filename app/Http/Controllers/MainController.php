<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo il Models "Saint"
use App\Models\Saint;

class MainController extends Controller
{
    public function home()
    {

        $saints = Saint::all();

        $data = [
            'saints' => $saints
        ];

        return view('pages.home', $data);
    }
}