<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class Project extends Model implements HasMedia
{

    use HasMediaTrait;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        // model event will be executed before data is saved
        self::saving(function ($project) {

            $slug = str_slug($project->name);

            // check if slug exists
            do{
                $slug = $slug . '-1';
            }
            while(self::where('slug', $slug)->first());

            $project->slug = $slug;
        });
    }

    public function path()
    {
        return "/projects/{$this->slug}";
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
