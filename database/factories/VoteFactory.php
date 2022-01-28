<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'voter_id' => User::all()->random()->id,
            'voted_id' => User::all()->random()->id,
            'upvote' => $this->faker->boolean(),
        ];
    }
}
