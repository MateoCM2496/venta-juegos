<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    //
    public function index($id)
    {
        $game = Game::find($id);
        return view('auth.info', ['game' => $game]);
    }
}
