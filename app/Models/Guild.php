<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    protected $table = 'guilds';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'ID';
}
