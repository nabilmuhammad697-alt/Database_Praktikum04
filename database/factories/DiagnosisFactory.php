<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class DiagnosisFactory extends Factory {
    public function definition(): array { return ['nama_diagnosis'=>$this->faker->randomElement(['ISPA','Gastritis','Dermatitis','Karies Gigi','Demam','Flu','Sakit Kepala','Konjungtivitis']),'keterangan'=>$this->faker->optional()->sentence(8)]; }
}
