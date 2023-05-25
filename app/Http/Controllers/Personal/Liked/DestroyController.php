<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(User $post)
    {
        auth()->user()->likedPosts()->detach($post);
        return redirect()->route('personal.liked.index');
    }
}
