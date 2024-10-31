<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    public function index(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $password = Hash::make($validated['password']);
        $user = User::query()->firstOrCreate([
            'email' => $validated['email']
        ], $validated);

        Mail::to($validated['email'])->send(new PasswordMail($password));

        if ($user instanceof Authenticatable) {
            event(new Registered($user));
        }

        return redirect()->route('admin.user.index');
    }
}
