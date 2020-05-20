<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DadesController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
}