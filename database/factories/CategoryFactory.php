<?php

namespace Database\Factories;

use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'language_id' => Language::take(1)->skip(rand(0,2))->first(),
            'category_name' => strtolower(str_replace(' ','-', fake()->sentence())),
            'link' => strtolower(str_replace(' ','-', fake()->sentence())),
            'active' => 1
        ];
    }
}
