<?php

namespace Database\Factories;

use App\Models\post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'           => User::factory('App\User'),
            'title'             => $this->faker->sentence,
            'featured_image'    => $this->faker->imageUrl('700', '394'),
            'body'              => $this->faker->paragraph(random_int(15,20))
        ];
    }
}
