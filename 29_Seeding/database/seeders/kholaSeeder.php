<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class kholaSeeder extends Seeder
{
 
    public function run(): void
    {
        DB::table('khola')->insert([
            "name"=>Str::random(10),
            "email"=>Str::random(10) ."@gmail.com",
            "phone" => Str::random(10),
        ]);
    }
}
