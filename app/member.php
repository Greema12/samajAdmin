<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    //
     protected $table = 'main_body_data';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

}
