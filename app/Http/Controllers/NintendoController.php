<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NintendoController extends Controller
{
    public function index()
    {
      
        return view('auth.nintendo');
    }

    public function store()
    {
        //
    }
}