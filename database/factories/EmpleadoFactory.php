<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fakerFileName = $this->faker->image(
            storage_path("app\data"),
            800,
            600
        );

        return [
            'nombre'=>$this->faker->name(),
            'telefono'=>"78978978",
            'correo'=>$this->faker->email,
            'direccion'=>$this->faker->address,
            'genero'=>$this->faker->randomElement(['MUJER','HOMBRE']),
            'fechanacimiento'=>$this->faker->datetimeBetween,
            'carnet'=>$this->faker->numberBetween(555555,999999),
            'foto'=>$this->faker->imageUrl(800,600),
            // 'foto' => "app\\data\\" . basename($fakerFileName),
            "turno_id"=>1,
            "profesion_id"=>1,
            
        ];
    }
}
