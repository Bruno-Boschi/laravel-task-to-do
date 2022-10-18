<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TarefaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user =  User::all()->random();

        while (count($user->categorias) == 0) {
            $user =  User::all()->random();
        }

        return [
            //


            'titulo' => $this->faker->text(15),
            'descricao' => $this->faker->text(70),
            'data' => $this->faker->dateTime(),
            'user_id' => User::all()->random(),
            'categoria_id' => $user->categorias->random(),
        ];
    }
}
