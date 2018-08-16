<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('tr');
    }

    public function index()
    {
        $event = Event::first();
        return view('index', compact('event'));
    }

    public function show()
    {

    }

    public function adminIndex()
    {
        return view('admin.index');
    }
}
