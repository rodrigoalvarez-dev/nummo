<?php

namespace Database\Factories;

use App\Models\Recurrence;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Recurrence>
 */
class RecurrenceFactory extends Factory
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
            'frequency' => fake()->randomElement(RecurrenceFrequency::cases()),
            'type' => fake()->randomElement(TransactionType::cases()),
            'starts_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'ends_at' => fake()->optional()->dateTimeBetween('now', '+1 year'),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'account_id' => Account::factory(),
            'group_id' => null,
        ];
    }
}
