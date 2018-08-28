<?php

namespace App\Http\Controllers;

use App\Event;
use App\Setting;
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

    public function contact()
    {
        return view('contact');
    }

    public function update(Request $request)
    {
        $setting = Setting::first();
        if($request->hasFile('logo')){
            $logo = $request->logo->store('images');
            $setting->update(
                array_merge($request->all(), ['logo' => $logo])
            );
        }else {
            $setting->update($request->all());
        }

        return back();
    }

    public function adminIndex()
    {
        $setting = Setting::first();
        return view('admin.index', compact('setting'));
    }
}
