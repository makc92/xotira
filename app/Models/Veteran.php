<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use KingOfCode\Upload\Uploadable;

/**
 * App\Models\Veteran
 *
 * @property int $id
 * @property string $thumbnail
 * @property string $region
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\VeteranTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\VeteranTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran query()
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran withTranslation()
 * @mixin \Eloquent
 */
class Veteran extends Model
{
    use Uploadable, Translatable;

    protected $fillable = ['region'];

    public $translatedAttributes = ['name', 'slug', 'description'];

    protected $uploadableImages = [
        'thumbnail'
    ];

}
