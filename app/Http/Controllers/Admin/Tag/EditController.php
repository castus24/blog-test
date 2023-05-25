<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class EditController extends Controller
{
    public function index(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }
}
