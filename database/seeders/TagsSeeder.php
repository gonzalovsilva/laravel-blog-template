<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['name' => 'Lifestyle'],
            ['name' => 'Creative'],
            ['name' => 'HTML5'],
            ['name' => 'Inspiration'],
            ['name' => 'Motivation'],
            ['name' => 'PSD'],
            ['name' => 'Responsive'],
        ]);
    }
}
