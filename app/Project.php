<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    public function path()
    {
        return "/projects/{$this->slug}";
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
