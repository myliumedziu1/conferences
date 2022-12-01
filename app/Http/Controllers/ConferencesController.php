<?php

namespace App\Http\Controllers;
use \App\Models\Conferences;
use Illuminate\Http\Request;

class ConferencesController extends Controller
{
    public function index(Request $request)
    {
        return view('form');
    }
}
