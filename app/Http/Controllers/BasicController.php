<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function __invoke()
    {
        return view('main.index');
    }
}
