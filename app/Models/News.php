<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use KingOfCode\Upload\Uploadable;

/**
 * App\Models\News
 *
 * @property int $id
 * @property string|null $thumbnail
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\NewsTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NewsTranslation[] $translations
 * @property-read int|null $translations_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|News listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|News orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|News orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|News orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 * @method static \Illuminate\Database\Eloquent\Builder|News translated()
 * @method static \Illuminate\Database\Eloquent\Builder|News translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News withTranslation()
 * @mixin \Eloquent
 */
class News extends Model
{
    use Uploadable, Translatable;

    protected $fillable = ['user_id'];

    public $translatedAttributes = ['title', 'slug', 'content'];

    protected $uploadableImages = [
        'thumbnail' => ['thumb'=> 300, 'medium'=> 700]
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
