<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class H_logo extends Model
{
    //
     protected $table = 'logo_manage';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
