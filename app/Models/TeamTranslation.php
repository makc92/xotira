<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TeamTranslation
 *
 * @property int $id
 * @property string $locale
 * @property int $team_id
 * @property string $name
 * @property string $slug
 * @property string $position
 * @property string $bio
 * @property string $days
 * @property string $activity
 * @method static \Illuminate\Database\Eloquent\Builder|TeamTranslation findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamTranslation whereActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamTranslation whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamTranslation whereDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamTranslation wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamTranslation whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamTranslation whereTeamId($value)
 * @mixin \Eloquent
 */
class TeamTranslation extends Model
{
    use Sluggable;

    protected $fillable  = ['name', 'bio', 'days', 'activity','position'];

    public $timestamps = false;



    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
