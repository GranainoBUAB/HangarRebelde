<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function getMyProfile($id)
    {
        $user = Auth::user();
        $user = User::find($id);

        return view('profile', compact('user'));
    }

    public function editMyProfile($id)
    {
        $user = Auth::user();
        $user = User::find($id);
        return view('editProfile', compact('user'));
    }


    public function updateMyProfile(Request $request, $id)
    {
        $updateMyProfile = request()->except(['_token', '_method']);
        User::where('id', '=', $id)->update($updateMyProfile);
        $user = User::findOrFail($id);

        return redirect()->route('myProfile', ['id'=>$user->id]);
    }
}
