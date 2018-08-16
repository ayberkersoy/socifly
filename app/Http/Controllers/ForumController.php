<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Forum;
use App\SubForum;
use App\Topic;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('tr');
    }
    public function index()
    {
        $forums = Forum::all();
        return view('forums.index', compact('forums'));
    }

    public function show(Forum $forum)
    {
        return view('forums.show', compact('forum'));
    }

    public function showSubForum(Forum $forum, SubForum $subForum)
    {
        return view('forums.sub-forum', compact('forum', 'subForum'));
    }

    public function showTopicReplies(Forum $forum, SubForum $subForum, Topic $topic)
    {
        return view('forums.topic-forum', compact('forum', 'subForum', 'topic'));
    }

    public function adminForum()
    {
        return view('admin.forum.index');
    }

    public function adminSubForum()
    {
        return view('admin.forum.sub-forum');
    }

    public function adminForumTopics()
    {
        return view('admin.forum.forum-topics');
    }

    public function adminForumPosts()
    {
        return view('admin.forum.forum-posts');
    }
}
