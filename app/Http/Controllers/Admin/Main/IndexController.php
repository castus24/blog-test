<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class IndexController extends Controller
{
    public function index(): View|Application|Factory
    {
        $data = [
            'usersCount' => User::query()->count(),
            'categoriesCount' => Category::query()->count(),
            'postsCount' => Post::query()->count(),
            'tagsCount' => Tag::query()->count(),
        ];

        return view('admin.main.index', compact('data'));
    }
}
