<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class DokterFactory extends Factory {
    public function definition(): array { return ['nama'=>'dr. '.$this->faker->name(),'spesialisasi'=>$this->faker->randomElement(['Dokter Umum','Dokter Gigi','KIA'])]; }
}
