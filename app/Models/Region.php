<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Region
 *
 * @property int $id
 * @property string $title
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Veteran[] $veteran
 * @property-read int|null $veteran_count
 * @method static \Illuminate\Database\Eloquent\Builder|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereTitle($value)
 * @mixin \Eloquent
 */
class Region extends Model
{
    protected $fillable = ['title'];
    public $timestamps = false;

    public function veteran()
    {
        return $this->hasMany(Veteran::class);
    }
}
