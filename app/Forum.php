<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'tag';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function sub_forum()
    {
        return $this->hasMany(SubForum::class);
    }

    public function topic()
    {
        return $this->hasMany(Topic::class);
    }

    public function topic_replies()
    {
        return $this->hasMany(TopicReply::class);
    }
}
