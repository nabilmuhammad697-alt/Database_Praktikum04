<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Laporan extends Model { use HasFactory;
    protected $table='laporans'; protected $primaryKey='id_laporan';
    protected $fillable=['id_admin','id_poli','jenis_laporan','periode_awal','periode_akhir','total_pasien','total_kunjungan','keterangan'];
    protected $casts=['periode_awal'=>'date','periode_akhir'=>'date'];
    public function admin(){ return $this->belongsTo(Admin::class,'id_admin','id_admin'); }
    public function poli(){ return $this->belongsTo(Poli::class,'id_poli','id_poli'); }
}
