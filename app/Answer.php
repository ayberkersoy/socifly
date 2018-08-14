<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = [];

    public function topic_reply()
    {
        return $this->belongsTo(TopicReply::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
