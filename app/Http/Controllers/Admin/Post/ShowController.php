<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class ShowController extends BaseController
{
    public function index(Post $post): View|Application|Factory
    {
        return view('admin.posts.show', compact('post'));
    }
}
