<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $comment = Comment::take(1)->skip(rand(0,20))->first();
        return [
            'post_id' => $comment === null ? Post::take(1)->skip(rand(0,19))->first() : $comment->post_id,
            'parent_id' => $comment,
            'name_surname' => fake()->name,
            'email' => fake()->unique()->safeEmail(),
            'comment' => fake()->sentence(),
            'approved' => 1
        ];
    }
}
