<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $usersByRole = User::all()->groupBy('roles_id');
        return view('users.index', compact('usersByRole'));
    }

    public function changeRole($id)
    {
        $users = User::find($id);
        $users->roles_id = 2;
        $users->save();

        return redirect()->back();
    }

    public function editUser($id)
    {
        $users = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function deleteUser($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->route('users.index');
    }

    public function updateUser(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->save();

        return redirect()->route('users.index');
    }
}