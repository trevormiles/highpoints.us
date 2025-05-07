<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

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

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (Highpoint $highpoint) {
            if (empty($highpoint->slug)) {
                $highpoint->slug = Str::slug($highpoint->name);
            }
        });

        static::updating(function (Highpoint $highpoint) {
            if ($highpoint->isDirty('name')) {
                $highpoint->slug = Str::slug($highpoint->name);
            }
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

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
