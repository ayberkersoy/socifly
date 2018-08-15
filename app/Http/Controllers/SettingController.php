<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $event = Event::first();
        return view('index', compact('event'));
    }

    public function show()
    {

    }
}
