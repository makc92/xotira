<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use KingOfCode\Upload\Uploadable;

/**
 * App\Models\Book
 *
 * @property int $id
 * @property string $title
 * @property string $thumbnail
 * @property string $book
 * @property array $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Book extends Model
{
    use Uploadable;

    protected $fillable = ['title','description'];

    protected $uploadableImages = [
        'thumbnail' => ['thumb'=> 300, 'medium'=> 700, 'normal' => 1200]
    ];

    protected $uploadableFiles = [
        'book'
    ];

    protected $casts = [
        'description' => 'array',
    ];
}
