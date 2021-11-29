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
        $post_id = Post::get()->random()->id;
        $user_id = User::whereNotIn('id', config('app.privileged_users'))->get()->random()->id;
        return [
            'comment' => $this->faker->sentence(8),
            'post_id' => $post_id,
            'user_id' => $user_id,
        ];
    }
}
