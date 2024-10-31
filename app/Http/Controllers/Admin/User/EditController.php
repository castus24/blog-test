<?php

namespace App\Http\Controllers\Admin\User;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class EditController extends Controller
{
    public function index(User $user): View|Application|Factory
    {
        $roles = RoleEnum::toLabels();

        return view('admin.users.edit', compact('user', 'roles'));
    }
}
