<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Order::class;

    public function definition(): array
    {
        return [
            'id' => \App\Models\User::factory(), // Assuming you have a User model
            'total_price' => $this->faker->numberBetween(500000, 1000000),
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled'])
        ];
    }
}
