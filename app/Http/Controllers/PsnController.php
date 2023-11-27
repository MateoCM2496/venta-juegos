<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PsnController extends Controller
{
    public function index()
    {
        //
        $games = Game::all();
        return view('auth.psn', compact('games'));
    }

    public function store()
    {
        //
    }
}