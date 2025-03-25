<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        $title = $this->faker->sentence();
        $content = $this->faker->paragraphs(6, true);
        $created_at = $this->faker->dateTimeBetween('-1 year');

        return [
            'title' => $this->faker->unique()->sentence(),
            'slug' => Str::slug($title),
            'excerpt' => Str::limit($content, 200),
            'content' => $content,
            'thumbnail' => $this->faker->imageUrl(),
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}
