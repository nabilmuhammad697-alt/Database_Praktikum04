<?php
namespace Database\Seeders;
use App\Models\{Admin,Dokter,Pasien,Role,User,Poli}; use Illuminate\Database\Seeder;
class UserSeeder extends Seeder { public function run(): void {
    $rAdmin=Role::where('nama_role','admin')->firstOrFail(); $rDokter=Role::where('nama_role','dokter')->firstOrFail(); $rPasien=Role::where('nama_role','pasien')->firstOrFail();
    for($i=1;$i<=2;$i++){ $u=User::factory()->create(['role_id'=>$rAdmin->id_role,'email'=>"admin{$i}@puskestren.test"]); Admin::factory()->create(['user_id'=>$u->id_user]); }
    $dokterUsers=[]; foreach(['Poli Umum','Poli Gigi','Poli KIA'] as $idx=>$poliName){ $u=User::factory()->create(['role_id'=>$rDokter->id_role,'email'=>'dokter'.($idx+1).'@puskestren.test']); $p=Poli::where('nama_poli',$poliName)->firstOrFail(); Dokter::factory()->create(['user_id'=>$u->id_user,'id_poli'=>$p->id_poli]); $dokterUsers[]=$u->id_user; }
    for($i=1;$i<=10;$i++){ $u=User::factory()->create(['role_id'=>$rPasien->id_role,'email'=>"pasien{$i}@puskestren.test"]); Pasien::factory()->create(['user_id'=>$u->id_user]); }
} }
