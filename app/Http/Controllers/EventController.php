<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(12);
        return view('events.index', compact('events'));
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
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
}
