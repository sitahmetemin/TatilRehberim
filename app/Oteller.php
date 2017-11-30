<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oteller extends Model
{
    protected $table = 'oteller';

    protected $fillable = [
        'ad',
        'fiyat',
        'yildiz',
        'resim_yol',
        'il_id',
        'denize_sifir',
        'su_kaynagi',
        'cocuk_su_kaydiragi',
        'gece_kulubu',
        'wifi',
        'otopark',
        'restorant',
        'toplanti_salonu'
    ];

    public function il() {
        return $this->belongsTo(Iller::class, 'il_id', 'id');
    }

    public function setDenizeSifirAttribute($value) {
        $this->attributes['denize_sifir'] = $value == 'on' ? true : false;
    }

    public function setSuKaynagiAttribute($value) {
        $this->attributes['su_kaynagi'] = $value == 'on' ? true : false;
    }

    public function setCocukSuKaydiragiAttribute($value) {
        $this->attributes['cocuk_su_kaydiragi'] = $value == 'on' ? true : false;
    }

    public function setGeceKulubuAttribute($value) {
        $this->attributes['gece_kulubu'] = $value == 'on' ? true : false;
    }

    public function setWifiAttribute($value) {
        $this->attributes['wifi'] = $value == 'on' ? true : false;
    }

    public function setOtoparkAttribute($value) {
        $this->attributes['otopark'] = $value == 'on' ? true : false;
    }

    public function setRestorantAttribute($value) {
        $this->attributes['restorant'] = $value == 'on' ? true : false;
    }

    public function setToplantiSalonuAttribute($value) {
        $this->attributes['toplanti_salonu'] = $value == 'on' ? true : false;
    }

}
