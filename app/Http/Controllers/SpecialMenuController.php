<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialMenuController extends Controller
{
    public function index()
    {
        return view('special_menu');
    }
}
