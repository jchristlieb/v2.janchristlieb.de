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

//    public function setDefault($projectID, $mediaID)
//    {
//
//        $project = Project::find($projectID);
//        $images = $project->getMedia($project->slug);
//        $i = 2;
//        foreach ($images as $image)
//        {
//            $image->order_column = $i;
//            $i++;
//        }
//
//        $default = Media::where('id', $mediaID)->update(['order_column' => '1']);
//        dd($images);
//
//        return redirect(route('admin.projects.edit', $projectID));
//
//    }

    public function update(request $request, $projectId)
    {
        $project = Project::where('id', $projectId)->first();

        // SET NEW IMAGE ORDER

        // retrieve the new order request
        $order = $request->order;
        // sort the array in ascending order, according to value (position)
        asort($order);
        // take the keys of the array and put it into the variable ranking
        $ranking = array_keys($order);
        // order the media according to the new ranking
        Media::setNewOrder($ranking);

        // DELETE SELECTED IMAGES FROM COLLECTION

        // retrieve deletion request
        $images = array_keys($request->delete, "on");

        foreach ($images as $image)
            Media::destroy($image);

        return redirect(route('admin.projects.edit', $projectId));
    }
}
