<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodosTableSeeder extends Seeder
{
    public function run()
    {
        Todo::create(["title" => "筋を通す"]);
        Todo::create(["title" => "資料を提出する"]);
        Todo::create(["title" => "レポートを書く"]);
        Todo::create(["title" => "カラオケを予約する"]);
        Todo::create(["title" => "田中さんに電話する"]);
    }
}
