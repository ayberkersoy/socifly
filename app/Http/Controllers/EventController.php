<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create()
    {
        return view('admin.events.create');
    }

    public function index()
    {
        $events = Event::paginate(12);
        return view('events.index', compact('events'));
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'desc' => 'required',
            'location' => 'required',
            'date' => 'required',
            'start_time' => 'required',
        ]);
        if ($request->hasFile('logo')) {
            $logo = $request->logo->store('images');
            Event::create([
                'name' => $request->name,
                'description' => $request->desc,
                'location' => $request->location,
                'date' => $request->date,
                'start_time' => $request->start_time,
                'end_time' => '18:00',
                'image' => $logo,
                'group_id' => $request->group_id,
                'tag' => str_slug($request->name),
                'locationx' => $request->locationx,
                'locationy' => $request->locationy
            ]);
        }elseif($request->hasFile('banner')) {
            $banner = $request->banner->store('images');
            Event::create([
                'name' => $request->name,
                'description' => $request->desc,
                'location' => $request->location,
                'date' => $request->date,
                'start_time' => $request->start_time,
                'end_time' => '18:00',
                'banner' => $banner,
                'group_id' => $request->group_id,
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
                'group_id' => $request->group_id,
                'tag' => str_slug($request->name),
                'locationx' => $request->locationx,
                'locationy' => $request->locationy
            ]);
        }

        return redirect('/admin/events');
    }

    public function joinEvent(Event $event)
    {
        $event->users()->attach(auth()->id());
        return back();
    }

    public function adminEvents()
    {
        return view('admin.events.index');
    }

    public function showAdmin(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'name' => 'required',
            'desc' => 'required',
            'location' => 'required',
            'date' => 'required',
            'start_time' => 'required',
        ]);
        if ($request->hasFile('logo')) {
            $logo = $request->logo->store('images');
            $event->update([
                'name' => $request->name,
                'description' => $request->desc,
                'location' => $request->location,
                'date' => $request->date,
                'start_time' => $request->start_time,
                'end_time' => '18:00',
                'image' => $logo,
                'group_id' => $request->group_id,
                'tag' => str_slug($request->name),
                'locationx' => $request->locationx,
                'locationy' => $request->locationy
            ]);
        }elseif($request->hasFile('banner')) {
            $banner = $request->banner->store('images');
            $event->update([
                'name' => $request->name,
                'description' => $request->desc,
                'location' => $request->location,
                'date' => $request->date,
                'start_time' => $request->start_time,
                'end_time' => '18:00',
                'banner' => $banner,
                'group_id' => $request->group_id,
                'tag' => str_slug($request->name),
                'locationx' => $request->locationx,
                'locationy' => $request->locationy
            ]);
        }else {
            $event->update([
                'name' => $request->name,
                'description' => $request->desc,
                'location' => $request->location,
                'date' => $request->date,
                'start_time' => $request->start_time,
                'end_time' => '18:00',
                'group_id' => $request->group_id,
                'tag' => str_slug($request->name),
                'locationx' => $request->locationx,
                'locationy' => $request->locationy
            ]);
        }

        return redirect('/admin/events');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return back();
    }
}
