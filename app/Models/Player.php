<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'entities';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'UID';
}
