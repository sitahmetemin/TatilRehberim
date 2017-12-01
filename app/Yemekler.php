<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yemekler extends Model
{
    protected $table = 'yemekler';

    protected $fillable = [
        'ad',
        'resim_yol',
        'aciklama',
        'il_id'
    ];

    public function il() {
        return $this->belongsTo(Iller::class, 'il_id', 'id');
    }
}
