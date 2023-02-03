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

        $saints = Saint::orderBy('created_at', 'DESC')->get();

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

    // Create
    public function saintCreate()
    {
        return view('pages.saintCreate');
    }

    // Store
    public function saintStore(Request $request)
    {

        $data = $request->all();

        // var_dump($data);

        $saint = new Saint();

        $saint->name = $data['name'];
        $saint->place_of_birth = $data['place_of_birth'];
        $saint->blessing_date = $data['blessing_date'];
        $saint->number_of_miracles = $data['number_of_miracles'];

        $saint->save();

        return redirect()->route('home');
    }
}