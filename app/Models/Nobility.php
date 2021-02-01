<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nobility extends Model
{
    protected $table = 'nobility';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'EntityUID';
}
