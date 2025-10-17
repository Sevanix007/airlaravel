<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lidmasina extends Model
{
    //
                    protected $table = 'Lidmasina';
    protected $primaryKey = 'LidmasinasID'; // <-- aizvieto ar īsto kolonnas nosaukumu
    // public $incrementing = false;       // ja nav AUTO_INCREMENT
    // protected $keyType = 'string';      // ja nav int, bet varchar
      public $timestamps = false;  //Lai nepieprasa created_at un updated_at kolonnas
}
