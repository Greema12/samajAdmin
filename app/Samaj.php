<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Samaj extends Model
{
    //
     protected $table = 'samaj_activity';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
