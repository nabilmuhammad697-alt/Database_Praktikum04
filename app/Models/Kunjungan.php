<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Kunjungan extends Model { use HasFactory;
    protected $table='kunjungans'; protected $primaryKey='id_kunjungan';
    protected $fillable=['id_pasien','id_dokter','id_poli','tanggal','status','keluhan_awal'];
    protected $casts=['tanggal'=>'date'];
    public function pasien(){ return $this->belongsTo(Pasien::class,'id_pasien','id_pasien'); }
    public function dokter(){ return $this->belongsTo(Dokter::class,'id_dokter','id_dokter'); }
    public function poli(){ return $this->belongsTo(Poli::class,'id_poli','id_poli'); }
    public function antrean(){ return $this->hasOne(Antrean::class,'id_kunjungan','id_kunjungan'); }
    public function pemeriksaan(){ return $this->hasOne(Pemeriksaan::class,'id_kunjungan','id_kunjungan'); }
}
