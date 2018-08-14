<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'tag';
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    public function sub_forum()
    {
        return $this->belongsTo(SubForum::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function topic_replies()
    {
        return $this->hasMany(TopicReply::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
