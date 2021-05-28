<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => Post::pluck('id')->random(),
            'user_id' => User::pluck('id')->random(),
            'message' => $this->faker->realText($this->faker->numberBetween(80, 280), 2),
            'img' => $this->faker->image(public_path('images/users'), 100, 100, 'people,faces', false)
        ];
    }
}
