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
    public function definition()
    {
        $title = $this->faker->realText(50);

        return [
            //
            'cover' => $this->faker->imageUrl,
            'title' => $title,
            'description' => $this->faker->realText(75),
            'body' => $this->faker->randomHtml(1),
            'published' => '1',
            'draft' => '0',
            'slug' => Str::slug($title)
        ];
    }
}
