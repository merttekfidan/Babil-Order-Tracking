<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit(User $user)
    {
        $users = User::findOrFail($user->id);
        $roles = Role::all();
        return view('user.edit')->with('users', $users)
                                ->with('roles', $roles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $users = User::findOrFail($user->id);
        $users->name = $request->name;
        $users->surname = $request->surname;
        $users->nickname = $request->nickname;
        $users->password = Hash::make($request->password);
        $users->email = $request->email;
        $users->phone_number = $request->phone_number;
        if ($request->user()->can('isAdmin', $user)) {
            $users->roles()->sync($request->roles);
        }
        $users->save();
        return redirect()->route('home')->with('success', " Başarılı bir şekilde profil güncellendi.");
    }
}
