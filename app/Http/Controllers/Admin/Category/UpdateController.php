<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Category $category): View|Application|Factory
    {
        $category->update($request->validated());

        return view('admin.categories.show', compact('category'));
    }
}
