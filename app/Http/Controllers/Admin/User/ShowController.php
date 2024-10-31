<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class ShowController extends Controller
{
    public function index(User $user): View|Application|Factory
    {
        return view('admin.users.show', compact('user'));
    }
}
