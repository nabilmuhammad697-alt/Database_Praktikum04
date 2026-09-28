<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Dokter extends Model { use HasFactory;
    protected $table='dokters'; protected $primaryKey='id_dokter';
    protected $fillable=['user_id','id_poli','nama','spesialisasi'];
    public function user(){ return $this->belongsTo(User::class,'user_id','id_user'); }
    public function poli(){ return $this->belongsTo(Poli::class,'id_poli','id_poli'); }
    public function kunjungans(){ return $this->hasMany(Kunjungan::class,'id_dokter','id_dokter'); }
}
