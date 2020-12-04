<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\VeteranTranslation
 *
 * @property int $id
 * @property string $locale
 * @property int $veteran_id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|VeteranTranslation findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|VeteranTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VeteranTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VeteranTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|VeteranTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VeteranTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VeteranTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VeteranTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VeteranTranslation whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VeteranTranslation whereVeteranId($value)
 * @mixin \Eloquent
 */
class VeteranTranslation extends Model
{
    use Sluggable;
    public $timestamps = false;

    protected $fillable  = ['name', 'description'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
