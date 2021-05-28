<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        $this->call([
            CategoriesSeeder::class,
            TagsSeeder::class,
        ]);

        \App\Models\Post::factory(20)->create()->each(function ($post) {

            $random = rand(1, 3);
            try {
                for ($i = 0; $i < $random; $i++) {
                    $post->tags()->attach(
                        [Tag::pluck('id')->random()]
                    );
                }
            } catch (\Throwable $th) {
            }
        });

        $this->call([
            CommentsSeeder::class
        ]);


    }
}
