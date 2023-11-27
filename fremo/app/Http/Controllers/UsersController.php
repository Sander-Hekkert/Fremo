<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
{
    // Assuming you have a "roles" relationship defined in your User model
    $usersByRole = User::get()->groupBy(function ($user) {
        // Je moet hier je eigen logica toevoegen om de rol-ID te bepalen
        return $user->role_id;
    });

    return view('users.index', compact('usersByRole'));
}

    public function changeRole($id, $newRoleId)
    {
        $users = User::find($id);
        
        // Assuming you have a "roles" relationship defined in your User model
        $users->roles()->sync([$newRoleId]);

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
