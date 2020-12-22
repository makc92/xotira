<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use KingOfCode\Upload\Uploadable;


/**
 * App\Models\Application
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property string $message
 * @property string|null $photo
 * @property string|null $document
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Application newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application query()
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Application extends Model
{
    use Uploadable;

    protected $fillable = ['name','phone','email','message'];

    protected $uploadableImages = [
        'photo',
    ];

    protected $uploadableFiles = [
        'document'
    ];


}
