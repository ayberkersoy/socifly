<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'tag';
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->hasMany(GroupPost::class);
    }

    public function forum()
    {
        return $this->hasMany(Forum::class);
    }
}
