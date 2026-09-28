<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class KunjunganFactory extends Factory {
    public function definition(): array { return ['tanggal'=>$this->faker->dateTimeBetween('-30 days','now')->format('Y-m-d'),'status'=>$this->faker->randomElement(['terdaftar','dipanggil','selesai']),'keluhan_awal'=>$this->faker->sentence(8)]; }
}
