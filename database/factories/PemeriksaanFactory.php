<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class PemeriksaanFactory extends Factory {
    public function definition(): array { return ['keluhan'=>$this->faker->sentence(10),'riwayat_penyakit'=>$this->faker->optional()->sentence(8),'hasil_pemeriksaan'=>$this->faker->sentence(12)]; }
}
