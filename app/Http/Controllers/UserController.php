<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function getUser(Request $request) {
        $user_id = $request->route('user_id');

        $user = User::where('id', '=', $user_id)->get();

        return view('users.GetUsers', ['user' => $user]);
    }
}
