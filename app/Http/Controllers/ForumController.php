<?php

namespace App\Http\Controllers;

use App\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::all();
        return view('forums.index', compact('forums'));
    }

    public function show(Forum $forum)
    {
        return view('forums.show', compact('forum'));
    }
}
