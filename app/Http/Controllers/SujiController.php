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
        return response()->json(
            [
                'code' => Response::HTTP_OK,
                'sujis' => $sujis
            ]
        );
    }
    public function add()
    {
        return response()->json("add", 200);
    }
}
