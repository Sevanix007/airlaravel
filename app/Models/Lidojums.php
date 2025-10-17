<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lidojums extends Model
{
                      protected $table = 'Lidojums';
    protected $primaryKey = 'LidojumaID'; // <-- aizvieto ar īsto kolonnas nosaukumu
    // public $incrementing = false;       // ja nav AUTO_INCREMENT
    // protected $keyType = 'string';      // ja nav int, bet varchar
      public $timestamps = false;  //Lai nepieprasa created_at un updated_at kolonnas



    //----------------------------------classificators----------------------------------//
    //----------------------------------Darbinieki----------------------------------//
                public function darbinieki()
    {
        return $this->belongsTo(Darbinieki::class, 'id');

    }
    //----------------------------------Lidmasinas----------------------------------//
                public function lidmasinas()
    {
        return $this->belongsTo(Lidmasina::class, 'LidmasinasID');

    }
    //----------------------------------Lidostas----------------------------------//
                public function lidostas()
    {
        return $this->belongsTo(Lidosta::class, 'LidostasID');

    }




}
