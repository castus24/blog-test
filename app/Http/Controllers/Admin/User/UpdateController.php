<?php

namespace App\Http\Controllers\Admin\User;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class UpdateController extends Controller
{
    /**
     * @throws Exception
     */
    public function index(UpdateRequest $request, User $user): View|Application|Factory
    {
        $admin = RoleEnum::ADMIN()->value;
        $reader = RoleEnum::READER()->value;

        $user->syncRoles([]);

        match ($request->validated('role')) {
            $admin => $user->assignRole($admin),
            $reader => $user->assignRole($reader),
            'default' => throw new Exception('Error assigning role.')
        };

        $user->update([
            'name' => $request->validated('name'),
            'email' => $request->validated('email'),
            'user_id' => $request->validated('user_id'),
        ]);

        return view('admin.users.show', compact('user'));
    }
}
