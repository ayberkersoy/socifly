<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('tr');
    }

    public function index()
    {
        $users = User::where('status', 1)->paginate(12);
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'password' => 'sometimes|confirmed',
        ]);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->phone = $request->phone;
        $user->date_of_birth = $request->date_of_birth;
        $user->biography = $request->biography;
        $user->job = $request->job;
        if($request->hasFile('avatar')) {
            $user->avatar = $request->avatar->store('images');
        }elseif ($request->hasFile('banner')) {
            $user->banner = $request->banner->store('images');
        }
        if($request->has('password')) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return back();
    }

    public function adminUsers()
    {
        return view('admin.users.index');
    }
}
