<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    protected $table = 'perbaikan';

    protected $fillable = ['nama_perbaikan', 'deskripsi'];

    public function logbook() {
        return $this->belongsToMany('App\Logbook', 'logbook_perbaikan', 'id_perbaikan', 'id_logbook');
    }

    public function setPerbaikanAttribute($value) {
        $this->attributes['perbaikan'] = strtoupper($value);
    }
    public function setDeskripsiAttribute($value) {
        $this->attributes['deskripsi'] = strtoupper($value);
    }
}
