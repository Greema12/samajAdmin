<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
     protected $table = 'slider_manage';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
