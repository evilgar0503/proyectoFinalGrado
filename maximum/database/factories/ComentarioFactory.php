<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => $this->faker->numberBetween(1, 10),
            'noticia_id'=>  $this->faker->numberBetween(1, 6),
            'contenido' => $this->faker->text(100)
        ];
    }
}
