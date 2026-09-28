<?php
namespace Database\Seeders;
use App\Models\Poli; use Illuminate\Database\Seeder;
class PoliSeeder extends Seeder { public function run(): void { foreach([['nama_poli'=>'Poli Umum','keterangan'=>'Pelayanan pemeriksaan umum'],['nama_poli'=>'Poli Gigi','keterangan'=>'Pelayanan kesehatan gigi dan mulut'],['nama_poli'=>'Poli KIA','keterangan'=>'Kesehatan Ibu dan Anak']] as $row){ Poli::create($row); } } }
