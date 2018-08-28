<?php

namespace App\Http\Controllers;

use App\SubForum;
use Illuminate\Http\Request;

class SubForumController extends Controller
{
    public function destroy(SubForum $subForum)
    {
        $subForum->delete();
        return back();
    }
}
