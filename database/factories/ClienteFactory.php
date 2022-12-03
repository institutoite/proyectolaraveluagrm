<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->name,
            'ci'=>$this->faker->randomNumber(8, true),
            'direccion'=> $this->faker->address,
            'telefono'=> $this->faker->randomElement(['7','6']).$this->faker->numerify('#######'),
        ];
    }
}
