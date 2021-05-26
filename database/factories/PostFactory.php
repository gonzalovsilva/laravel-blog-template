<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug(),
            'title' => $this->faker->realText(35),
            'user_id' => User::pluck('id')->random(),
            'excerpt' => $this->faker->realTextBetween(60, 120),
            'body' => $this->faker->paragraphs(5, true),
            'published_at' => now(),
        ];
    }
}
