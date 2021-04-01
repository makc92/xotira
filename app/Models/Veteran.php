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
 * @property int $region_id
 * @method static \Illuminate\Database\Eloquent\Builder|Veteran whereRegionId($value)
 */
class Veteran extends Model
{
    use Uploadable, Translatable;

    protected $fillable = ['region_id'];

    public $translatedAttributes = ['name', 'slug', 'description'];

    protected $uploadableImages = [
        'thumbnail' => ['thumb' => 300, 'medium' => 700, 'normal' => 1200]
    ];

    const CITY_TASHKENT = 'tashkent';
    const CITY_ANDIJAN = 'andijan';
    const CITY_BUKHARA = 'bukhara';
    const CITY_FERGANA = 'fergana';
    const CITY_JIZZAKH = 'jizzakh';
    const CITY_NAMANGAN = 'namangan';
    const CITY_NAVOIY = 'navoiy';
    const CITY_QASHQADARYO = 'qashqadaryo';
    const CITY_SAMARKAND = 'samarkand';
    const CITY_SIRDARYO = 'sirdaryo';
    const CITY_SURHANDARYO = 'surhandaryo';
    const CITY_TASHKENT_REGION = 'tashkent_region';
    const CITY_XORAZM = 'xorazm';
    const CITY_QARAQALPAKSTAN = 'qaraqalpakstan';

    public static function regionList(): array
    {
        return [
            self::CITY_TASHKENT => 'tashkent',
            self::CITY_ANDIJAN => 'andijan',
            self::CITY_BUKHARA => 'bukhara',
            self::CITY_FERGANA => 'fergana',
            self::CITY_JIZZAKH => 'jizzakh',
            self::CITY_NAMANGAN => 'namangan',
            self::CITY_NAVOIY => 'navoiy',
            self::CITY_QASHQADARYO => 'qashqadaryo',
            self::CITY_SAMARKAND => 'samarkand',
            self::CITY_SIRDARYO => 'sirdaryo',
            self::CITY_SURHANDARYO => 'surhandaryo',
            self::CITY_TASHKENT_REGION => 'tashkent_region',
            self::CITY_XORAZM => 'xorazm',
            self::CITY_QARAQALPAKSTAN => 'qaraqalpakstan',
        ];
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }


}
