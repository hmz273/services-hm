<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services__categories')->insert([
            "name" =>"AC",
            "slug" =>"ac",
            "image" =>"1.jpg",
        ],
        [
            "name" =>"Plombier",
            "slug" =>"plombier",
            "image" =>"2.jpg",
        ]);
    }
}
