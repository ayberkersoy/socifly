<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicReply extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function forum()
    {
        return $this->belongsTo(Forun::class);
    }

    public function sub_forum()
    {
        return $this->belongsTo(SubForum::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
