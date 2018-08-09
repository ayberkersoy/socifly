<?php

namespace App\Http\Controllers;

use App\Group;
use App\GroupPost;
use Illuminate\Http\Request;

class GroupPostController extends Controller
{
    public function store(Group $group, Request $request)
    {
        GroupPost::create([
            'post' => $request->post,
            'group_id' => $group->id,
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
