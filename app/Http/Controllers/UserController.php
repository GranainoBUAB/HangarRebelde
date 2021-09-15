<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUser()
    {
        $users = User::all();

        return view('users', compact('users'));
    }

    public function destroyUser($id)
    {
        User::destroy($id);

        return redirect()->route('users');
    }


}
