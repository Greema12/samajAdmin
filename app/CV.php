<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
     protected $table = 'member_cv';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
