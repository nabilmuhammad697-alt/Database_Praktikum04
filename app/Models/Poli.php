<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Poli extends Model { use HasFactory;
    protected $table='polis'; protected $primaryKey='id_poli';
    protected $fillable=['nama_poli','keterangan'];
    public function dokters(){ return $this->hasMany(Dokter::class,'id_poli','id_poli'); }
    public function kunjungans(){ return $this->hasMany(Kunjungan::class,'id_poli','id_poli'); }
    public function laporans(){ return $this->hasMany(Laporan::class,'id_poli','id_poli'); }
}
