<?php

use App\User;
use App\UserProfile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Create a new user
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'userID' => $request->input('userID'),
            'level_id' => $request->input('level_id'),
            'role_id' => $request->input('role_id'),
        ]);
        $user->save();

        // Create a corresponding user profile and associate it with the user
        $profile = new UserProfile([
            'name' => $user->name,
            'email' => $user->email,
            'user_id' => $user->id, // Associate with the user
        ]);
        $profile->save();

        // You can also use the `profile` relationship to associate them like this:
        // $user->profile()->save($profile);

        // Redirect or return a response as needed
    }
}
