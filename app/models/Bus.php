<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Bus extends Eloquent{
//  mengambil nama tabel dan memberi nilai false pada field timestamps 
    protected $table='tabelbus';
    public $timestamps=false;
    
//  menyatakan relasi one to many ke tabel perjalanan
    public function perjalanan() {
        return $this->belongsTo("App\\Models\\Perjalanan");
    }
    
}
