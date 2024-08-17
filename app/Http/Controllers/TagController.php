<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('components.results', ['jobs' => $tag->jobs->load(['employer', 'tags'])]);
    }
}