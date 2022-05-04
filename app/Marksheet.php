<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marksheet extends Model
{
    //
     protected $table = 'upload_marksheet';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
