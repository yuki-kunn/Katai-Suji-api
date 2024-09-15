<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Suji;

class SujisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Suji::create(["title" => "夜遊びをしない"]);
        Suji::create(["title" => "お酒を飲まない"]);
        Suji::create(["title" => "早寝早起きをする"]);
    }
}
