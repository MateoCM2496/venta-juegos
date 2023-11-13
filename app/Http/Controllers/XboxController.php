<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class XboxController extends Controller
{
    public function index()
    {
        //
        return view('auth.xbox');
    }

    public function store()
    {
        //
    }
}