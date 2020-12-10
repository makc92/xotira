<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\NewsTranslation
 *
 * @property int $id
 * @property string $locale
 * @property int $news_id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTranslation findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTranslation whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTranslation whereNewsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTranslation whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NewsTranslation whereTitle($value)
 * @mixin \Eloquent
 */
class NewsTranslation extends Model
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
