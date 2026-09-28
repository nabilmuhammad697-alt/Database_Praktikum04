<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Diagnosis extends Model { use HasFactory;
    protected $table='diagnoses'; protected $primaryKey='id_diagnosis';
    protected $fillable=['id_pemeriksaan','nama_diagnosis','keterangan'];
    public function pemeriksaan(){ return $this->belongsTo(Pemeriksaan::class,'id_pemeriksaan','id_pemeriksaan'); }
}
