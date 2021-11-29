<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = User::whereIn('id', config('app.write_privileged_users'))->get()->random()->id;
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(20),
            'user_id' => $user_id,
        ];
    }
}
