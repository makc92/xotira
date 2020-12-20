<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use KingOfCode\Upload\Uploadable;

class Photo extends Model
{

    use Uploadable;
    protected $guarded = [];


    protected $uploadableImages = [
        'thumbnail' => ['thumb'=> 300, 'medium'=> 750 ]
    ];
    protected $imageResizeTypes = [
        'normal' => false,
    ];
}
