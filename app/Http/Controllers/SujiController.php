<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SujiController extends Controller
{
    public function list()
    {
        return response()->json("hello, world", 200);
    }
}
