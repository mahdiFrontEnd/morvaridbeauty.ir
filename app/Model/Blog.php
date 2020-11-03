<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Blog extends Model
{

    protected $fillable = ['category_id', 'publish', 'admin_id', 'slug', 'image_path','thumbnail'];


}
