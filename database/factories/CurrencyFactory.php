<?php

namespace Database\Factories;

use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Currency>
 */
class CurrencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $code = fake()->currencyCode();

        return [
            'name' => $code,
            'symbol' => fake()->currencySymbol(),
            'code' => $code,
            'is_active' => true,
        ];
    }
}
