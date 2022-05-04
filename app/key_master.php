<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class key_master extends Model
{
    //
     protected $table = 'key_person_master';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

}
