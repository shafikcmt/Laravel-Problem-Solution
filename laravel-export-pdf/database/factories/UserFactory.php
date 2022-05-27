<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
      
     * @return array<string, mixed>
     */
    protected $model = Product::class;
    public function definition()
    {
        return [
            'sku' => $this->faker->randomNumber(),
            'name' => $this->faker->word(),
            'amount' => $this->faker->numberBetween(1, 20),
            'price' => $this->faker->numberBetween(10, 500),
            'description' => $this->faker->text(),
            'created_at' => '00:00:00',
            'updated_at' => '00:00:00'
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
