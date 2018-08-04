<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Project extends Model implements HasMedia
{

    use HasMediaTrait;

    protected $guarded = [];

    /**
     * @param Media|null $media
     * @throws \Spatie\Image\Exceptions\InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(100)
            ->height(100);
    }

    protected static function boot()
    {
        parent::boot();

        // model event will be executed before data is saved
        self::saving(function ($project) {

            $slug = str_slug($project->name);
            $test = self::where('slug', '=', $slug)->exists();

            if ($test === true) {
                $slug = $slug . '-1';
            }

            $project->slug = $slug;
        });
    }

    public function path()
    {
        return "/projects/{$this->slug}";
    }

    public function tags()
    {
        // establish many-to-many relationship from projects to tags
        return $this->belongsToMany(Tag::class);
    }
}
