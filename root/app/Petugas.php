<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';

    protected $fillable = ['nik', 'nama', 'tgl_lahir', 'alamat', 'no_hp', 'foto'];

    public function logbook() {
        return $this->belongsToMany('App\Logbook', 'logbook_petugas', 'id_petugas', 'id_logbook');
    }
    public function SetTglLahirAttribute($value){
    	$this->attributes['tgl_lahir'] = date("Y-m-d", strtotime($value));
    }
    public function getTglLahirAttribute($value) {
        return date("d-m-Y", strtotime($value));
    }
}
