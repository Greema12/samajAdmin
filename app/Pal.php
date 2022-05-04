<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pal extends Model
{
    //
     protected $table = 'pal_master';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

}
