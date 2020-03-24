<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = ['id', 'email', 'review', 'page_uid', 'created'];

    public $timestamps = false;

}
