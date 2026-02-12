<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user', ['users' => $users]);
    }
    public function show($id)
    {
        return "Showing user with ID: " . $id;
    }
}
