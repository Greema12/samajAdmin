<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class G_master extends Model
{
    //
     protected $table = 'gallery_master';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
