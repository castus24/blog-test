<?php

namespace App\Http\Controllers\Admin\User;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class CreateController extends Controller
{
    public function index(): View|Application|Factory
    {
        $roles = RoleEnum::toLabels();

        return view('admin.users.create', compact('roles'));
    }
}
