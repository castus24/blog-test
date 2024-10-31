<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use App\Models\Post;

class IndexController extends BaseController
{
    public function index(): View|Application|Factory
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }
}
