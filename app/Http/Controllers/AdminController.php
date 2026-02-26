<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gadai;

class AdminController extends Controller
{
    public function index()
    {
        $gadais = Gadai::all();
        return view('admin.pages.dashboard', compact('gadais'));
    }
}
