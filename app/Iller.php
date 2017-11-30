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
        return $this->hasMany(Ilceler::class, 'il_id','id');
    }
}
