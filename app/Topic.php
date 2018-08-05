<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
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
}
