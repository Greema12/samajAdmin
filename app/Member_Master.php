<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member_Master extends Model
{
    //
     protected $table = 'member_master';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

}
