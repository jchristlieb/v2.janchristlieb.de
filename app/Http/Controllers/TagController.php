<?php

namespace App\Http\Controllers;

use App\Project;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $tagId;

    public function single($slug)
    {
        $tag = Tag::where('slug','=', $slug)->first();
        $projects = $tag->projects;
        return view('tags.single', compact('tag', 'projects'));
    }
}
