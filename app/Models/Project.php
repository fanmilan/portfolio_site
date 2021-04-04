<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function getDefaultAttributesFor($attribute)
    {
        return in_array($attribute, ["cover"])
            ? ["model_key" => $attribute]
            : [];
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function links()
    {
        return $this->morphMany(Link::class, 'linkable');
    }



    public function cover() {
        return $this->morphOne(Image::class, "model")
            ->where("model_key", "cover");
    }
}
