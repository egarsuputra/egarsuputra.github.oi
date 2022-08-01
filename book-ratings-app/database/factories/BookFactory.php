<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => mt_rand(1, 100),
            'category_id' => mt_rand(1, 300),
            'book_name' => $this->faker->sentence(mt_rand(2, 5)),
        ];
    }
}
