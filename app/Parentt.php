<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentt extends Model
{
    protected $fillable = [
        'user_id'
    ];
    public $timestamps = false;
    protected $table = 'parents';
}
