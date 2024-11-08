<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->company(),
            'type' => fake()->randomElement(['checking', 'savings']),
            'currency' => fake()->randomElement(['USD', 'EUR', 'BRL']),
            'initial_balance' => fake()->numberBetween(0, 100000) * (fake()->boolean() ? 1 : -1),
            'initial_balance_date' => fake()->dateTimeThisYear()->format('Y-m-d'),
        ];
    }
}
