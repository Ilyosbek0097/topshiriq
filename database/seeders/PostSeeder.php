<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($a=0; $a < 30; $a++) {
            DB::table('posts')->insert([
                'category_id' => random_int(1,34),//Sababi Ctegoriyalarning Idsi Hozircha 1-34 gacha
                'description' => Str::random(6)." ".Str::random(10)." ". Str::random(4)." ".Str::random(7),
                'slug' => Str::random(12),
            ]);
        }

    }
}
