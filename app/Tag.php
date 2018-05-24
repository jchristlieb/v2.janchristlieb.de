<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        // model event will be executed before data is saved
        self::saving(function ($tag) {

            $slug = str_slug($tag->name);
            $test = self::where('slug','=', $slug)->exists();
            if ($test === true) {
                $slug = $slug . '-1';
            }

            $tag->slug = $slug;
        });
    }

    public function projects()
    {
        // establish many-to-many relationship for tags with projects
        return $this->belongsToMany(Project::class);
    }
}
