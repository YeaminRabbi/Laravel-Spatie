<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Post;
use App\Models\User;
class PostFactory extends Factory
{

   
    //protected $model = \App\Models\Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title' => $this->faker->text(50),
            'user_id' =>  User::get()->random()->id,
            'content' => $this->faker->paragraph(),
            'created_at' => now(),
        ];
    }
}
