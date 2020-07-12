<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function update(Request $req, $id)
    {
        $user = User::findOrFail($id);

        $user->update($req->all());

        return \response()->json([
            "user" => $user
        ]);
    }

    public function index()
    {
        return User::latest()->paginate(10);
    }
}