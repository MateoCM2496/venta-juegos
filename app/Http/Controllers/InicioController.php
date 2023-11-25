<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('inicio', compact('games'));
    }
}
