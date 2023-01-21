<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Language;
use App\Models\Tag;
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
            'language_id' => Language::take(1)->skip(rand(0,2))->first(),
            'title' => $title,
            'body' => fake()->paragraph($nbSentences = 20),
            'slug' => strtolower(str_replace(' ','-', $title)),
            'categories' => array(
                Category::take(1)->skip(rand(0,4))->first()->id,
                Category::take(1)->skip(rand(0,4))->first()->id
            ),
            'tags' => array(
                Tag::take(1)->skip(rand(0,4))->first()->id,
                Tag::take(1)->skip(rand(0,4))->first()->id
            ),
            'images' => array(
                'image_id'
            ),
            'published' => 1
        ];
    }
}
