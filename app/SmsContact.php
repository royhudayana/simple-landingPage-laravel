<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsContact extends Model
{
    protected $fillable = ['name', 'number', 'group_id', 'source', 'user_id'];

    public function group()
    {
        return $this->belongsTo('App\SmsGroup');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
