<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fakeFields = ['role'];
    public $timestamps = true;
    public function users() {
        return $this->belongsToMany(User::class, 'role_users')->withTimestamps();
    }
}
