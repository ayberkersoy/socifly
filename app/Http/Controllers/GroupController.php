<?php

namespace App\Http\Controllers;

use App\Group;
use App\Event;
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
                'image' => $logo,
                'user_id' => auth()->id()
            ]);
        }elseif($request->hasFile('banner')){
            $banner = $request->banner->store('images');
            Group::create([
                'name' => $request->name,
                'description' => $request->desc,
                'tag' => str_slug($request->name),
                'banner' => $banner,
                'user_id' => auth()->id()
            ]);
        }else {
            Group::create([
                'name' => $request->name,
                'description' => $request->desc,
                'tag' => str_slug($request->name),
                'user_id' => auth()->id()
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

    public function eventsCreate(Group $group)
    {
        return view('events.create', compact('group'));
    }

    public function storeEvent(Request $request, Group $group)
    {
        $this->validate($request, [
            'name' => 'required',
            'desc' => 'required',
            'location' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'image' => 'required',
            'banner' => 'required',
        ]);
        if ($request->hasFile('image') AND $request->hasFile('banner')) {
            $logo = $request->image->store('images');
            $banner = $request->banner->store('images');
            Event::create([
                'name' => $request->name,
                'description' => $request->desc,
                'location' => $request->location,
                'date' => $request->date,
                'start_time' => $request->start_time,
                'end_time' => '18:00',
                'image' => $logo,
                'banner' => $banner,
                'group_id' => $group->id,
                'tag' => str_slug($request->name),
                'locationx' => $request->locationx,
                'locationy' => $request->locationy
            ]);
        }else {
            Event::create([
                'name' => $request->name,
                'description' => $request->desc,
                'location' => $request->location,
                'date' => $request->date,
                'start_time' => $request->start_time,
                'end_time' => '18:00',
                'group_id' => $group->id,
                'tag' => str_slug($request->name),
                'locationx' => $request->locationx,
                'locationy' => $request->locationy
            ]);
        }

        return redirect('/groups/'. $group->tag .'/events');
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return back();
    }
}
