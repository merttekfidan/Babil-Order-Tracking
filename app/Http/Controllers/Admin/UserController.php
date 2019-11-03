<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->nickname = $request->nickname;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->active = true;
        $user->last_online = null;
        $user->save();
        $user=User::all()->last();
        $user->roles()->attach($request->roles);


        return redirect()->route('admin.user.index')->with('success', " Başarılı bir şekilde kullanıcı eklendi.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $users = User::findOrFail($user->id);
        $users->active=0;
        $users->blocked_date=Carbon::now();
        $users->save();
        return redirect()->route('admin.user.index');
    }
    public function active(User $user)
    {
        $users = User::findOrFail($user->id);
        $users->active=1;
        $users->blocked_date=null;
        $users->save();
        return redirect()->route('admin.user.index');
    }
}
