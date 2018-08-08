<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubForum extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class);
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
