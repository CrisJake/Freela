<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request) {
        $user_id = $request->route('id');
        
    }

    public function create() {
        return view('services.CreateService');
    }
}
