<?php

namespace App\Models;

use Code16\Sharp\Form\Eloquent\Uploads\SharpUploadModel;

class Image extends SharpUploadModel
{
    protected $table = 'images';
}
