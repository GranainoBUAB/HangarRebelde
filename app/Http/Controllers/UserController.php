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

        $users = User::where('name', 'like', '%' . $request->input('query') . '%')
            ->orWhere('surname', 'like', '%' . $request->input('query') . '%')
            ->orWhere('email', 'like', '%' . $request->input('query') . '%')
            ->orWhere('dni', 'like', '%' . $request->input('query') . '%')
            ->orWhere('phone1', 'like', '%' . $request->input('query') . '%')
            ->orWhere('phone2', 'like', '%' . $request->input('query') . '%')
            ->orWhere('membership_number', 'like', '%' . $request->input('query') . '%')
            ->orWhere('address', 'like', '%' . $request->input('query') . '%')
            ->orWhere('zipCode', 'like', '%' . $request->input('query') . '%')
            ->orWhere('city', 'like', '%' . $request->input('query') . '%')
            ->orWhere('region', 'like', '%' . $request->input('query') . '%')
            ->orWhere('country', 'like', '%' . $request->input('query') . '%')
            ->orWhere('notes', 'like', '%' . $request->input('query') . '%')
            ->get();

        return view('users', compact('users'));
    }
};
