<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsGroup extends Model
{
    protected $fillable = ['name', 'description', 'keyword','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
