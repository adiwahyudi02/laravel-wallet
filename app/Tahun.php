<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    protected $table  = 'tahun';
    protected $fillable = ['tahun_masuk', 'tarif_spp'];

    public function userTahun() {

        return $this->hasMany(User::class);

    }
    
}
