<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\View\View;

final class UsersController extends Controller
{
    public function show(User $user): View
    {
        return view('user', compact('user'));
    }
}
