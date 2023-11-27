<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class XboxController extends Controller
{
    public function index()
    {
        //
        $games = Game::all();
        return view('auth.xbox', compact('games'));
    }

    public function store()
    {
        //
    }
}