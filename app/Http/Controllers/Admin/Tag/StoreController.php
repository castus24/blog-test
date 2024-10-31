<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    public function index(StoreRequest $request): RedirectResponse
    {
        Tag::query()->firstOrCreate($request->validated());

        return redirect()->route('admin.tag.index');
    }
}
