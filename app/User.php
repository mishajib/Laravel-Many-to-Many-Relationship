<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = true;
    public function roles() {
        return $this->belongsToMany(Role::class, 'role_users')->withTimestamps();
    }
}
