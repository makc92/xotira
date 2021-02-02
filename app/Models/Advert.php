<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use KingOfCode\Upload\Uploadable;

class Advert extends Model
{
    use Uploadable, Translatable;

    protected $fillable = ['user_id'];

    public $translatedAttributes = ['title', 'slug', 'content'];

    protected $uploadableImages = [
        'thumbnail' => ['thumb'=> 300, 'medium'=> 700, 'normal' => 1200]
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
