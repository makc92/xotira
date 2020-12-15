<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use KingOfCode\Upload\Uploadable;

/**
 * App\Models\Achievement
 *
 * @property int $id
 * @property string|null $thumbnail
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AchievementTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AchievementTranslation[] $translations
 * @property-read int|null $translations_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Achievement withTranslation()
 * @mixin \Eloquent
 */
class Achievement extends Model
{
    use Uploadable, Translatable;


    protected $fillable = ['user_id'];

    public $translatedAttributes = ['title', 'slug', 'content'];

    protected $uploadableImages = [
        'thumbnail'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
