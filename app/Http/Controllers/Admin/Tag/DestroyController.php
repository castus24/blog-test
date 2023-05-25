<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Tag;

class DestroyController extends Controller
{
    public function index(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tag.index');
    }
}
