<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upcoming extends Model
{
    //
      protected $table = 'upcoming_event';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

   
}
