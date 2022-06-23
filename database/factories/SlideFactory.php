<?php

namespace Database\Factories;

use App\Helpers\Constants\SliderInterface;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slide>
 */
class SlideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'cover' => $this->faker->imageUrl,
            'caption' => $this->faker->text,
            'url' => $this->faker->url,
            'status' => SliderInterface::SLIDE_STATUS_VISIBLE,
            'author' => 1
        ];
    }
}
