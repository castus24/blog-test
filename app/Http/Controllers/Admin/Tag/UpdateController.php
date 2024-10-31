<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Tag $tag): View|Application|Factory
    {
        $tag->update($request->validated());

        return view('admin.tags.show', compact('tag'));
    }
}
