<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
        $title = fake()->sentence();
        return [
            'user_id' => User::all()[0]->_id,
            'title' => $title,
            'body' => fake()->paragraph($nbSentences = 20),
            'slug' => strtolower(str_replace(' ','-', $title))
        ];
    }
}
