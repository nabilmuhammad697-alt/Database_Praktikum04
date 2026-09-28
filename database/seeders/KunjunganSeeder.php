<?php
namespace Database\Seeders;
use App\Models\{Antrean,Diagnosis,Dokter,Kunjungan,Pasien,Pemeriksaan,Poli}; use Illuminate\Database\Seeder;
class KunjunganSeeder extends Seeder { public function run(): void {
    $pasien=Pasien::all(); $dokters=Dokter::all(); $polis=Poli::all(); $queue=1;
    for($i=0;$i<12;$i++){ $p=$pasien[$i%$pasien->count()]; $d=$dokters[$i%$dokters->count()]; $pol=$polis[$i%$polis->count()];
        $k=Kunjungan::factory()->create(['id_pasien'=>$p->id_pasien,'id_dokter'=>$d->id_dokter,'id_poli'=>$pol->id_poli]);
        Antrean::factory()->create(['id_kunjungan'=>$k->id_kunjungan,'nomor_antrean'=>$queue++]);
        $exam=Pemeriksaan::factory()->create(['id_kunjungan'=>$k->id_kunjungan]);
        Diagnosis::factory()->create(['id_pemeriksaan'=>$exam->id_pemeriksaan]);
    }
} }
