<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Todo;
use Symfony\Component\HttpFoundation\Response;

class ToDoController extends Controller
{
    public function index(): JsonResponse
    {
        $todos = Todo::get();
        return response()->json($todos);
    }
    public function add(Request $request)
    {
        ToDo::create(["title" => $request->title]);
        return response()->json($request->title, 200);
    }
}
