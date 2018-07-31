<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\MediaLibrary\FileAdder\FileAdder;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class ProjectMediaController extends Controller implements HasMedia
{
    use HasMediaTrait;

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(100)
            ->height(100);
    }


    public function create(request $request, $slug) {

        $project = Project::where('slug', $slug)->first();

            $project
                ->addMultipleMediaFromRequest(['images'])
                ->each(function (FileAdder $fileAdder) use($project){
                    $fileAdder
                        ->withResponsiveImages()
                        ->toMediaCollection($project->slug);
                });

        return view ('admin.dashboard');
    }

    public function destroy(request $request, $projectId, $mediaId)
    {
        Media::destroy($mediaId);

        session()->flash('success', 'image geloescht');
        return redirect(route('admin.projects.edit', $projectId));
    }
}
