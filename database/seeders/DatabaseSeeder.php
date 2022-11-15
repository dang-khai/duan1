<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'id' => 1,
                'name_cate' => 'Vinfast'
            ],
            [
                'id' => 2,
                'name_cate' => 'Vinfast'
            ],
        ]);
    }
}
