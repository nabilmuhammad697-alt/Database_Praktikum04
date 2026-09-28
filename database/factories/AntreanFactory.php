<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class AntreanFactory extends Factory {
    public function definition(): array { return ['nomor_antrean'=>$this->faker->numberBetween(1,30),'status'=>$this->faker->randomElement(['menunggu','dipanggil','selesai']),'waktu_panggil'=>$this->faker->optional(0.5)->dateTimeBetween('-2 hours','now')]; }
}
