<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUser()
    {
        $users = User::where('isAdmin', '=', false)->get();
        return view('users', compact('users'));
    }

    public function destroyUsers($id)
    {
        User::destroy($id);
        return back();
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('editUser', compact('user'));
    }

    public function updateUsers(Request $request, $id)
    {
        $updateUser = request()->except(['_token', '_method']);

        User::where('id', '=', $id)->update($updateUser);
        User::findOrFail($id);

        return redirect()->route('getUser');
    }

    public function searchUsers(Request $request)
    {
        $users = User::searchUserinList($request);
        return view('users', compact('users'));
    }
    
    public function userNotVerified()
    {
        $users = User::userNotVerified();
        return view('users', compact('users'));
    }

};
