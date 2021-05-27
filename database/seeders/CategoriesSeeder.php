<?php

namespace Database\Seeders;

use App\Models\Category;
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
        // FOR TAGS LATER
        // DB::table('categories')->insert([
        //     ['name' => 'Lifestyle'],
        //     ['name' => 'Creative'],
        //     ['name' => 'HTML5'],
        //     ['name' => 'Inspiration'],
        //     ['name' => 'Motivation'],
        //     ['name' => 'PSD'],
        //     ['name' => 'Responsive'],
        // ]);

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
