<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class DestroyController extends BaseController
{
    public function index(Post $post): RedirectResponse
    {
        $post->delete();

        return redirect()->route('admin.post.index');
    }
}
