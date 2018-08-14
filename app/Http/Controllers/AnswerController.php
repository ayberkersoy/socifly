<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Forum;
use App\SubForum;
use App\Topic;
use App\TopicReply;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Forum $forum, SubForum $subForum, Topic $topic, TopicReply $topicReply, Request $request)
    {
        $topicAnswer = TopicReply::create([
            'reply' => $request->answer,
            'user_id' => auth()->id(),
            'forum_id' => $forum->id,
            'sub_forum_id' => $subForum->id,
            'topic_id' => $topic->id
        ]);

        Answer::create([
            'answer' => $topicReply->reply,
            'user_id' => auth()->id(),
            'forum_id' => $forum->id,
            'sub_forum_id' => $subForum->id,
            'topic_id' => $topic->id,
            'topic_reply_id' => $topicAnswer->id,
        ]);

        return back();
    }

    public function like(Answer $answer)
    {
        $answer->likes = $answer->likes += 1;
        $answer->save();

        return back();
    }

    public function dislike(Answer $answer)
    {
        $answer->dislikes = $answer->dislikes += 1;
        $answer->save();

        return back();
    }
}
