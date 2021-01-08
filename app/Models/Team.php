<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use KingOfCode\Upload\Uploadable;

/**
 * App\Models\Team
 *
 * @property int $id
 * @property string $thumbnail
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TeamTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TeamTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Team listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Team orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Team orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Team orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Team translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team withTranslation()
 * @mixin \Eloquent
 */
class Team extends Model
{
    use Translatable, Uploadable;

    protected $fillable = ['order'];

    public $translatedAttributes =  ['name','slug', 'bio', 'days', 'activity', 'position'];

    protected $uploadableImages = [
        'thumbnail' => ['thumb'=> 200, 'medium'=> 750, 'normal'=>900 ]
    ];

}
