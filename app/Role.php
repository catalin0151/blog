<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    static public function getBySlug($slugName) {
        return Role::where('slug', $slugName)->first();
    }

    public function isAdmin() {
        return $this->slug === 'admin';
    }
    public function isUser() {
        return $this->slug === 'user';
    }
    public function isAuthor() {
        return $this->slug === 'author';
    }
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
