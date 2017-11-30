<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ilceler extends Model
{
    protected $table = 'ilce';

    protected $fillable = [
        'ad',
        'il_id'
    ];

    protected $casts = [
        'ad' => 'string',
        'il_id' => 'integer'
    ];

    public function il() {
        return $this->belongsTo(Iller::class, 'id', 'il_id');
    }
}
