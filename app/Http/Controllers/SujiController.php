<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SujiController extends Controller
{
    public function list()
    {
        return response()->json("sujisuji", 200);
    }
    public function add()
    {
        return response()->json("add", 200);
    }
}
