<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iller extends Model
{
    protected $table = 'iller';

    protected $fillable = [
        'ad'
    ];

    protected $casts = [
        'ad' => 'string'
    ];

    public function ilce() {
        return $this->hasMany(Ilceler::class, 'id','il_id');
    }

    public function mekan() {
        return $this->hasMany(Mekanlar::class, 'id','il_id');
    }

    public function yemek() {
        return $this->hasMany(Yemekler::class, 'id','il_id');
    }
}
