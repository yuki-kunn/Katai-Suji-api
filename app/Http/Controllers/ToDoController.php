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
        return response()->json(
            [
                'code' => Response::HTTP_OK,
                'todos' => $todos
            ]
        );
    }
    public function add()
    {
        return response()->json("add", 200);
    }
}
