<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            ['name' => 'Nature Lifestyle'],
            ['name' => 'Awesome Layouts'],
            ['name' => 'Creative Ideas'],
            ['name' => 'Responsive Templates'],
            ['name' => 'HTML5/CSS3 Templates'],
            ['name' => 'Creative & Unique'],
        ]);
    }
}
