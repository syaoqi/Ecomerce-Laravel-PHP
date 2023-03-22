<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode' => $this->faker->sentence(mt_rand(1,2)),
            'nama' => $this->faker->sentence(mt_rand(1,2)),
            'slug' => $this->faker->slug(),
            'stok' =>  mt_rand(1, 7),
            'harga' => $this->faker->sentence(mt_rand(1,2)),
            'category_id' => mt_rand(1,7),
        ];
    }
}
