<?php

namespace App\Http\Controllers;

use App\Forum;
use App\SubForum;
use App\Topic;
use App\TopicReply;
use Illuminate\Http\Request;

class TopicReplyController extends Controller
{
    public function store(Forum $forum, SubForum $subForum, Topic $topic, Request $request)
    {
        TopicReply::create([
            'reply' => $request->reply,
            'user_id' => auth()->id(),
            'forum_id' => $forum->id,
            'sub_forum_id' => $subForum->id,
            'topic_id' => $topic->id
        ]);
        return back();
    }

    public function like(TopicReply $topicReply)
    {
        $topicReply->likes = $topicReply->likes += 1;
        $topicReply->save();

        return back();
    }

    public function dislike(TopicReply $topicReply)
    {
        $topicReply->dislikes = $topicReply->dislikes += 1;
        $topicReply->save();

        return back();
    }
}
