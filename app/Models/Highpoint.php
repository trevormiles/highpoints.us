<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

final class Highpoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'state',
        'elevation',
        'difficulty',
        'image_path',
        'image_alt',
    ];

    protected $casts = [
        'elevation' => 'integer',
    ];
}
