<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'titulo' => $this->faker->text(15),
            'cor' => $this->faker->safeHexColor(),
            'user_id' => User::all()->random(),
        ];
    }
}
