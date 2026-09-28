<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Pemeriksaan extends Model { use HasFactory;
    protected $table='pemeriksaans'; protected $primaryKey='id_pemeriksaan';
    protected $fillable=['id_kunjungan','keluhan','riwayat_penyakit','hasil_pemeriksaan'];
    public function kunjungan(){ return $this->belongsTo(Kunjungan::class,'id_kunjungan','id_kunjungan'); }
    public function diagnosis(){ return $this->hasOne(Diagnosis::class,'id_pemeriksaan','id_pemeriksaan'); }
}
