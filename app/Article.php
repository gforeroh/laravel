<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table='articles';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'body'];

    protected $hidden = ['created_at','updated_at'];
}
