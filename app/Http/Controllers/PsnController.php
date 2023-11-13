<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PsnController extends Controller
{
    public function index()
    {
        //
        return view('auth.psn');
    }

    public function store()
    {
        //
    }
}