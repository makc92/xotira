<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AchievementTranslation
 *
 * @property int $id
 * @property string $locale
 * @property int $achievement_id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @method static \Illuminate\Database\Eloquent\Builder|AchievementTranslation findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|AchievementTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AchievementTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AchievementTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|AchievementTranslation whereAchievementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AchievementTranslation whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AchievementTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AchievementTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AchievementTranslation whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AchievementTranslation whereTitle($value)
 * @mixin \Eloquent
 */
class AchievementTranslation extends Model
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
