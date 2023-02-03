<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo il Models "Saint"
use App\Models\Saint;

class MainController extends Controller
{

    // Bonus 1 - Index
    public function home()
    {

        $saints = Saint::all();

        // $data = [
        //     'saints' => $saint
        // ];

        return view('pages.home', compact('saints'));
    }

    // Bonus 2 - Show
    public function saintShow($id)
    {

        $saint = Saint::find($id);

        $data = [
            'saint' => $saint
        ];

        return view('pages.saintShow', $data);
    }

    // Delete
    public function saintDestroy($id)
    {

        $saint = Saint::find($id);
        $saint->delete();

        return redirect()->route('home');
    }

    public function saintCreate()
    {

        $saint = Saint::all();

        $data = [
            'saint' => $saint
        ];

        var_dump($data);

        return view('pages.saintCreate', $data);
    }
}