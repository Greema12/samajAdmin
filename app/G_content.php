<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class G_content extends Model
{
    //
    protected $table = 'gallery_content';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

}
