<?php

namespace App\Http\Controllers;

use App\Forum;
use App\SubForum;
use App\Topic;
use App\TopicReply;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function store(Forum $forum, SubForum $subForum, Request $request)
    {
        $topic = Topic::create([
            'name' => $request->name,
            'tag' => str_slug($request->name),
            'user_id' => auth()->id(),
            'forum_id' => $forum->id,
            'sub_forum_id' => $subForum->id
        ]);

        TopicReply::create([
            'reply' => $request->reply,
            'user_id' => auth()->id(),
            'forum_id' => $forum->id,
            'sub_forum_id' => $subForum->id,
            'topic_id' => $topic->id
        ]);

        return back();
    }
}
