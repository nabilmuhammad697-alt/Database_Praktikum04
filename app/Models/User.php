<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class User extends Authenticatable { use HasFactory, Notifiable;
    protected $table='users'; protected $primaryKey='id_user';
    protected $fillable=['role_id','nama','email','password'];
    protected $hidden=['password','remember_token'];
    public function getAuthPassword(){ return $this->password; }
    public function role(){ return $this->belongsTo(Role::class,'role_id','id_role'); }
    public function pasien(){ return $this->hasOne(Pasien::class,'user_id','id_user'); }
    public function dokter(){ return $this->hasOne(Dokter::class,'user_id','id_user'); }
    public function admin(){ return $this->hasOne(Admin::class,'user_id','id_user'); }
}
