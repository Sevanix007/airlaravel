<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Darbinieki extends Model
{
                         protected $table = 'Darbinieki';
    protected $primaryKey = 'id'; // <-- aizvieto ar īsto kolonnas nosaukumu
    // public $incrementing = false;       // ja nav AUTO_INCREMENT
    // protected $keyType = 'string';      // ja nav int, bet varchar
      public $timestamps = false;  //Lai nepieprasa created_at un updated_at kolonnas




        public function roles()
    {
        return $this->belongsTo(Roles::class, 'RoleID');
        //$this means the variable of created object.
        //For exemplpe, i created new class object ABC. ABC will be $this inside class function.
        // 'RoleID' is the foreign key in Darbinieki table that references Roles table.
    }
}

