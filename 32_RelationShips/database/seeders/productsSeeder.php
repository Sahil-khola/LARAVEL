<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
              DB::table("products")->insert([
                "name"=>"MacBook Air",
                "price"=>220000,
                "seller_id"=>2,
        ]);
    }
}
