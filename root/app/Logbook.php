<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    protected $table = 'logbook';
    protected $fillable = ['tanggal', 'tiket', 'no_tiket', 'wo', 'lokasi', 'keterangan'];

    public function perbaikan() {
        return $this->belongsToMany('App\Perbaikan', 'logbook_perbaikan', 'id_logbook', 'id_perbaikan');
    }
    public function petugas() {
        return $this->belongsToMany('App\Petugas', 'logbook_petugas', 'id_logbook', 'id_petugas');
    }
    public function setTanggalAttribute($value) {
        $this->attributes['tanggal'] = date("Y-m-d", strtotime($value));
    }
    public function getTanggalAttribute($value) {
        return date("m/d/Y", strtotime($value));
    }
}
