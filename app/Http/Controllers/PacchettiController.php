<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Travel;

class PacchettiController extends Controller
{
    public function index() {
        // Dati dal DB
        $travels=Travel::all();
        dump($travels);
        // Ritorno della vista
        return view ('pacchetti-viaggio', compact('travels'));
    }
}
