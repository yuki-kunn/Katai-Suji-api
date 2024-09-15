<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;
use App\Models\Todo;
use App\Models\Suji;
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
        $api_key = env("CHATGPT_API_KEY");
        $suji_titles = Suji::pluck("title")->toArray();
        $rules = "次のルールに従って文書をチェックしてください: " . implode(' ', $suji_titles);
        $document = "以下の文書がルールに適合しているかを判断し、適合していれば 'true' を、そうでなければ 'false' を返してください。文書内容: " . $request->title;
        $endpoint = 'https://api.openai.com/v1/chat/completions';
        $model = 'gpt-3.5-turbo';
        $data = [
            'model' => $model,
            'messages' => [
                ['role' => 'system', 'content' => $rules],
                ['role' => 'user', 'content' => $document]
            ],
            'max_tokens' => 10,
        ];
        $res = Http::withHeaders([
            'Authorization' => 'Bearer ' . $api_key,
            'Content-Type' => 'application/json',
        ])->post($endpoint, $data);
        $data = $res->json();
        $content = $data['choices'][0]['message']['content'];
        $is_valid = $content === 'true';
        if (!$is_valid) {
            return response()->json([], 400);
        }
        ToDo::create(["title" => $request->title]);
        return response()->json($content, 200);
    }
}
