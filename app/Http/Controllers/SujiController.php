<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Models\Suji;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Http\Request;

class SujiController extends Controller
{
    public function index(): JsonResponse
    {
        $sujis = Suji::get();
        return response()->json($sujis);
    }
    public function add(Request $request)
    {
        Suji::create(["title" => $request->title]);
        return response()->json($request->title, 200);
    }
}
