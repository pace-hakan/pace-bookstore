<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index() {
        $users = DB::table('users')->get();
        $user = User::all();
        return $user;
        return view('user.index', ['users' => $users]);
    }

    public function uploadAvatar(Request $request) {
        if ($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            return redirect('home')->with('message', 'Avatar uploaded.');
        }
        return redirect('home')->with('error', 'Image NOT uploaded!');
    }


}
