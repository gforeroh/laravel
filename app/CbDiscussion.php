<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CbDiscussion extends Model
{
    //
    protected $table='cb_discussion';
    protected $primaryKey = 'id';
    protected $fillable =  array('title', 'body', 'user_id');
}
