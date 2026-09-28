<?php
namespace Database\Seeders;
use App\Models\{Admin,Laporan,Poli}; use Illuminate\Database\Seeder;
class LaporanSeeder extends Seeder { public function run(): void { $admins=Admin::all(); $polis=Poli::all(); for($i=0;$i<6;$i++){ Laporan::factory()->create(['id_admin'=>$admins[$i%$admins->count()]->id_admin,'id_poli'=>$i%2===0?$polis[$i%$polis->count()]->id_poli:null]); } } }
