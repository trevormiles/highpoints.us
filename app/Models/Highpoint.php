<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class Highpoint extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'elevation' => 'integer',
    ];

    /**
     * Get the users who have completed this highpoint.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'highpoint_user')
            ->withPivot(['completed', 'completion_date', 'notes'])
            ->withTimestamps();
    }
}
