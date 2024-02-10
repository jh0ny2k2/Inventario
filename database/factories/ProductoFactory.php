<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "codigo" => 'PROD-'. $this->faker->randomNumber($nbDigits = 8,$strict = false),
            "modelo" => $this->faker->word(),
            "fabricante" => $this->faker->company(),
            "descripcion" => $this->faker->paragraph(),
            "imagen" => $this->faker->imageUrl($width = 640, $height = 480),
            "stock" => $this->faker->randomNumber($nbDigits = 8,$strict = false),
            "estado" => $this->faker->randomElement($array = array ('activo','roto','desaparecido')),
            "localizaciones_id" => "2"
        ];
    }
}
