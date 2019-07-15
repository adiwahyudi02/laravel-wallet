<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['user_id', 'type_transaksi', 'jumlah'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
