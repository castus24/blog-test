<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class IndexController extends Controller
{
    public function index(): View|Application|Factory
    {
        $posts = Post::query()->paginate(6);
        $randomPosts = Post::query()
            ->get()
            ->random(5);
        $likedPosts = Post::query()
            ->withCount('likedUsers')
            ->orderBy('liked_users_count', 'DESC')
            ->get()->take(4);

        return view('main.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
