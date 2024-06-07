<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::where('role_id', 2)->get();
        return view('dashboard.pengguna.index', compact('user'));
    }
}
