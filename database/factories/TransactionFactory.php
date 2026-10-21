<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => fake()->randomFloat(2, 1, 1000),
            'description' => fake()->sentence(),
            'date' => fake()->dateTimeBetween('-1 year', 'now'),
            'type' => fake()->randomElement(TransactionType::cases()),
            'status' => fake()->randomElement(TransactionStatus::cases()),
            'certainty' => fake()->randomElement(TransactionCertainty::cases()),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'account_id' => Account::factory(),
            'group_id' => null,
            'recurrence_id' => null,
        ];
    }
}
