<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo il Models "Saint"
use App\Models\Saint;

class MainController extends Controller
{

    // Bonus 1
    public function home()
    {

        $saints = Saint::all();

        // $data = [
        //     'saints' => $saint
        // ];

        return view('pages.home', compact('saints'));
    }

    // Bonus 2 
    public function saintShow($id)
    {

        $saint = Saint::find($id);

        $data = [
            'saint' => $saint
        ];

        return view('pages.saintShow', $data);
    }
}