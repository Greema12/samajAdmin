<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class key_data extends Model
{
    //
     protected $table = 'key_person_data';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

}
