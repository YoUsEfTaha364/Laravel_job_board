<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model=Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id"=>Str::uuid()->tostring(),
            "title"=>$this->faker->sentence,
            "author"=>$this->faker->name,
            "body"=>$this->faker->paragraph(3,true),
            "published"=>$this->faker->boolean
        ];
    }
}
