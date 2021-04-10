<?php

namespace Database\Factories;

use App\Models\Employees;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author' => $this->faker->name,
            'title' => $this->faker->realText(),
            'content' => $this->faker->realText(),

        ];
    }
}
