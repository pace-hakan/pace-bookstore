<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        $users = DB::table('users')->get();
        return view('user.index', ['users' => $users]);
    }

    public function uploadAvatar(Request $request) {
        $validator = Validator::make(
            [
                'image' => $request->image
            ],
            [
                'image' => 'required|image'
            ]
        );
        if ($validator->fails()){
            return redirect('home')->with('error', 'This is not an image file.');
        }else{
            if ($request->hasFile('image')) {
                User::uploadAvatar($request->image);
                return redirect('home')->with('message', 'Avatar uploaded.');
            }
        }
        return redirect('home')->with('error', 'Image NOT uploaded!');
    }


}
