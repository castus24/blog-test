<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class ShowController extends BaseController
{
    public function index(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }
}
