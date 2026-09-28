<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Pasien extends Model { use HasFactory;
    protected $table='pasiens'; protected $primaryKey='id_pasien';
    protected $fillable=['user_id','jenis_pasien','nama','alamat','asrama','no_identitas','tanggal_lahir'];
    protected $casts=['tanggal_lahir'=>'date'];
    public function user(){ return $this->belongsTo(User::class,'user_id','id_user'); }
    public function kunjungans(){ return $this->hasMany(Kunjungan::class,'id_pasien','id_pasien'); }
}
