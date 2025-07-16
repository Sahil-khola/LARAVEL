<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kholaSeed extends Seeder
{
   
    public function run(): void
    {
        DB::table('khola')->insert([
            "name"=>"Rahul",
            "email"=>"3Fb5c@example.com",
            "phoneNumber"=>"1234567890",
        ]);
    }
}
