<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
            protected $table = 'Roles';
    protected $primaryKey = 'RoleID'; // <-- aizvieto ar īsto kolonnas nosaukumu
    public $incrementing = false;       // ja nav AUTO_INCREMENT
    protected $keyType = 'string';      // ja nav int, bet varchar
      public $timestamps = false;


      
}
