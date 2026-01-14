<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FootertextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footertexts')->insert([
            'copyright' => '<p class="mb-0">Copyright © 2023 <a href="https://mbiraHelp.spruko.com/"> mbiraHelp </a>. Developed by <a href="https://spruko.com/">HavenPlus Technologies</a></p>',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
