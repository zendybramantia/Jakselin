<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPSTORM_META\map;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WisataKulinerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_tempat' => $this->faker->sentence(mt_rand(1, 2)),
            'category_id' => mt_rand(1, 5),
            'alamat' => $this->faker->address(),
            'deskripsi' => $this->faker->sentence(mt_rand(3, 6)),
            'gambar' => $this->faker->imageUrl(640, 480, 'cafe', true)
        ];
    }
}
