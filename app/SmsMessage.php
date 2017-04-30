<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsMessage extends Model
{
    protected $fillable = ['title', 'message', 'group_id', 'type', 'user_id'];

    public function group()
    {
        return $this->belongsTo('App\SmsGroup');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
