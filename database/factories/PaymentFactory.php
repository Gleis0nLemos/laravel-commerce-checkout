<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand_id' => Brand::inRandomOrder()->first()->id,
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(1),
            'slug' => $this->faker->slug(),
            'technical_description' => $this->faker->paragraph(1)
        ];
    }
}
