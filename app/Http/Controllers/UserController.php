<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        $users = DB::table('users')->get();
        $user = User::all();
        return $user;
        return view('user.index', ['users' => $users]);
    }

    public function upload(Request $request) {
        //dump($request->all());
        //dump($request->image);
        $request->image->store('images', 'public');
    }
}
