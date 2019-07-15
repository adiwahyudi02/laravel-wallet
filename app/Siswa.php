<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama', 'user_id','tahun_id', 'nis', 'jenis_kelamin', 'jurusan', 'password', 'tingkat', 'kelas'];

   
    public function user(){
        return $this->belongsTo(User::class);
    }
    // public function tahun(){
    //     return $this->hasOne(Tahun::class);
    // }
    
}

