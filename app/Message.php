<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = [
        'user_id', 'created_at', 'updated_at', 'content', 'image', 
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
