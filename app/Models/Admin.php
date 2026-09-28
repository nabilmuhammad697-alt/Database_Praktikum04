<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Admin extends Model { use HasFactory;
    protected $table='admins'; protected $primaryKey='id_admin';
    protected $fillable=['user_id','nama','jabatan'];
    public function user(){ return $this->belongsTo(User::class,'user_id','id_user'); }
    public function laporans(){ return $this->hasMany(Laporan::class,'id_admin','id_admin'); }
}
