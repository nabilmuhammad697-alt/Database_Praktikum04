<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    public function definition(): array
    {
        $santri = $this->faker->boolean(60);

        $tanggalLahir = $this->faker
            ->optional()
            ->dateTimeBetween('-40 years', '-15 years');

        return [
            'jenis_pasien' => $santri ? 'santri' : 'umum',
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'asrama' => $santri
                ? 'Asrama ' . $this->faker->numberBetween(1, 8)
                : null,
            'no_identitas' => $santri
                ? 'SAN-' . $this->faker->unique()->numerify('######')
                : $this->faker->unique()->numerify('################'),
            'tanggal_lahir' => $tanggalLahir?->format('Y-m-d'),
        ];
    }
}