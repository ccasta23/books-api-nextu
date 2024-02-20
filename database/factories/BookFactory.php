<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "book_name" => $this->faker->name,
            "book_description" => $this->faker->text,
            "book_author" => $this->faker->name,
            "book_publisher" => $this->faker->name,
            "book_price" => $this->faker->randomNumber(),
            "book_stock" => $this->faker->randomNumber(),
            "book_pages" => $this->faker->randomNumber()
        ];
    }
}
