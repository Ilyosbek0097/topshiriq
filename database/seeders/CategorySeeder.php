<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($a=0; $a < 30; $a++) {
            DB::table('categories')->insert([
                'name' => Str::random(10),
                'slug' => Str::random(15),
            ]);
        }

    }
}
