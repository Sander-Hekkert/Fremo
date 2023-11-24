<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display the profile of the authenticated user.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $loggedInUser = auth()->user();
        return view('profiles.index', compact('loggedInUser'));
    }

    /**
     * Show the form for editing the profile of the authenticated user.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $loggedInUser = auth()->user();
        return view('profiles.edit', compact('loggedInUser'));
    }

    /**
     * Update the profile of the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $loggedInUser = auth()->user();
        $loggedInUser->update($request->all());
        return redirect()->route('profiles.show');
    }
    
    /**
     * Remove the authenticated user's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $loggedInUser = auth()->user();
        $loggedInUser->delete();
        return redirect()->route('home'); // Or any other desired destination after deletion
    }
    public function index()
    {
        // Add logic to fetch and display a list of user profiles
        $userProfiles = User::all(); // Modify this line based on your data retrieval logic

        return view('profiles.show', compact('userProfiles'));
    }
}
