<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = [];

    public function users(){
        return $this->belongsToMany(User::class, 'group_users');
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function owner(){
        return $this->belongsTo(User::class);
    }
}
