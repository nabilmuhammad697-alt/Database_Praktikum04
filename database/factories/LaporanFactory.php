<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class LaporanFactory extends Factory {
    public function definition(): array { $start=$this->faker->dateTimeBetween('-6 months','-1 month'); $end=clone $start; $end->modify('+27 days'); return ['jenis_laporan'=>$this->faker->randomElement(['Laporan Data Pasien','Laporan Pelayanan Poli','Laporan Kunjungan']),'periode_awal'=>$start->format('Y-m-d'),'periode_akhir'=>$end->format('Y-m-d'),'total_pasien'=>$this->faker->numberBetween(20,120),'total_kunjungan'=>$this->faker->numberBetween(30,180),'keterangan'=>$this->faker->optional()->sentence(8)]; }
}
