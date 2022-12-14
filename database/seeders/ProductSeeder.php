<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Nette\Utils\Random;
use Ramsey\Uuid\Type\Integer;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('product')->insert([
                'id_cate' => $i++,
                'name' => 'Vinfast ' . $i,
                'year' => rand(1970, 2022),
                'color' => 'màu ' . $i,
                'description' => 'Xe vinfast ' . $i,
                'price' => $i * 1000,
            ]);
        }
    }
}
