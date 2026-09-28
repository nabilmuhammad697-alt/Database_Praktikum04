<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class AdminFactory extends Factory {
    public function definition(): array { return ['nama'=>$this->faker->name(),'jabatan'=>$this->faker->randomElement(['Petugas Administrasi','Operator Puskestren'])]; }
}
