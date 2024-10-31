<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;

class DestroyController extends Controller
{
    public function index(Tag $tag): RedirectResponse
    {
        $tag->delete();

        return redirect()->route('admin.tag.index');
    }
}
