<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use Illuminate\Auth\Access\Gate;

class HomeController
{
    public function index()
    {
        // $role = Role::create(['title' => 'admin']);
        // dd(Gate::denies('user_access'));
        return view('home');
    }
}
