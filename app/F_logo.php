<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F_logo extends Model
{
     protected $table = 'logo-footer';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
