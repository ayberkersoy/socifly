<?php

namespace App\Http\Controllers;

use App\SubForum;
use Illuminate\Http\Request;

class SubForumController extends Controller
{
    public function create()
    {
        return view('admin.forum.subForum-create');
    }

    public function store(Request $request)
    {
        SubForum::create([
            'name' => $request->name,
            'description' => $request->desc,
            'tag' => str_slug($request->name),
            'user_id' => auth()->id(),
            'forum_id' => $request->forum_id,
        ]);

        return redirect('/admin/sub-forum');
    }

    public function destroy(SubForum $subForum)
    {
        $subForum->delete();
        return back();
    }
}
