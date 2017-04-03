<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'lists';
    protected $fillable = ['title', 'body'];
}
