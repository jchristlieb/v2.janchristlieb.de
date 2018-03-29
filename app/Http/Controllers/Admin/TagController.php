<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        // validate request
        $validatedData = $this->validate(request(), [
            'name' => 'required',
        ]);

        // create and save a new tag
        Tag::create($validatedData);

        // return to dashboard
        return view('admin.dashboard');
    }

    public function edit($id)
    {
        // query requested tag object
        $tag = Tag::findOrFail($id);

        return view('admin.tags.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        // validate request
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        // find tag that should be updated
        $tag = Tag::findOrFail($id);

        // update $tag
        $tag->update($validatedData);

        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
    }

    public function destroy($id)
    {
        Tag::destroy($id);

        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
    }
}
