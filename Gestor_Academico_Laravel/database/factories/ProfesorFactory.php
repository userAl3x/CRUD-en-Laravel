<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'email' => $this->faker->email,
            'departamento' => $this->faker->randomElement(['Matematicas', 'Programacion', 'Base de datos', 'Sistemas Operativos', 'Redes']),
        ];
    }
}
