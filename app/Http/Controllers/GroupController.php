<?php

namespace App\Http\Controllers;

use App\Group;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('tr');
    }

    public function index()
    {
        $groups = Group::paginate(12);
        return view('groups.index', compact('groups'));
    }

    public function show(Group $group)
    {
        return view('groups.show', compact('group'));
    }
}
