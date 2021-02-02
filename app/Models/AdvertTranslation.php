<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class AdvertTranslation extends Model
{
    use Sluggable;
    protected $fillable  = ['title', 'content'];

    public $timestamps = false;


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
