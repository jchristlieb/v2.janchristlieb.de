<?php

namespace App\Http\Controllers;

use App\Project;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PortfolioController extends Controller
{
    /**
     * Query all project objects and return them to main project page
     *
     * @return Project
     */
    public function index()
    {
        $projects = Project::all();

        $tags = Tag::has('projects')->get();

        return view('projects.index', compact('projects', 'tags'));
    }

    public function single($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $images = $project->getMedia($project->slug);

        return view('projects.single', compact('project', 'images'));
    }


}
