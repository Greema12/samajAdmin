<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    //
    protected $table = 'advertise_manage';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

}
