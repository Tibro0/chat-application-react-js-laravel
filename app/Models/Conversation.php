<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $guarded = [];

    public function lastMessage(){
        return $this->belongsTo(Message::class, 'last_message_id');
    }

    public function user1(){
        return $this->belongsTo(User::class, 'user_id1');
    }

    public function user2(){
        return $this->belongsTo(User::class, 'user_id2');
    }
}
