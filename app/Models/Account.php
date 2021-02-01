<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'Username';
    public $incrementing = false;

    public function State(){
        return $this->State() == 1 ? 'Banned' : 'Active';
    }

}
