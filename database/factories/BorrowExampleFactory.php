<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BorrowExample>
 */
class BorrowExampleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'peminjaman_kode' => $this->faker->randomNumber(5, true),
            'buku_kode' => $this->faker->randomNumber(5, true),
            'detail_tgl_kembali' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'detail_denda' => $this->faker->randomFloat(2, 0, 100000),
            'detail_status_kembali' => $this->faker->boolean(80),
        ];
    }
}
