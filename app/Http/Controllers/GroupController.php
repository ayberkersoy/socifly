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

    public function create()
    {
        return view('admin.groups.create');
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

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'desc' => 'required'
        ], [
            'required' => ':attribute alanı zorunludur.'
        ]);
        if ($request->hasFile('logo')) {
            $logo = $request->logo->store('images');
            Group::create([
                'name' => $request->name,
                'description' => $request->desc,
                'tag' => str_slug($request->name),
                'image' => $logo
            ]);
        }elseif($request->hasFile('banner')){
            $banner = $request->banner->store('images');
            Group::create([
                'name' => $request->name,
                'description' => $request->desc,
                'tag' => str_slug($request->name),
                'banner' => $banner
            ]);
        }else {
            Group::create([
                'name' => $request->name,
                'description' => $request->desc,
                'tag' => str_slug($request->name)
            ]);
        }

        return redirect('/admin/groups');
    }

    public function forumIndex(Group $group)
    {
        return view('groups.group-forum', compact('group'));
    }

    public function usersIndex(Group $group)
    {
        $users = $group->users()->paginate(12);
        return view('groups.group-users', compact('group', 'users'));
    }

    public function joinGroup(Group $group)
    {
        $group->users()->attach(auth()->id());
        return back();
    }

    public function eventsIndex(Group $group)
    {
        return view('groups.group-events', compact('group'));
    }

    public function adminGroups()
    {
        return view('admin.groups.index');
    }
}
