<?php

declare(strict_types=1);

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_admin' => 'boolean',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return true; // Allow all users during development
    }

    /**
     * Get the highpoints that the user has completed.
     */
    public function highpoints(): BelongsToMany
    {
        return $this->belongsToMany(Highpoint::class, 'highpoint_user')
            ->withPivot(['completed', 'completion_date', 'notes'])
            ->withTimestamps();
    }

    /**
     * Boot the model.
     * 
     * This method is called when the model is booted. We use it to register
     * model events and define any model-specific behavior.
     */
    protected static function booted(): void
    {
        /**
         * When a new user is created, automatically create HighpointUser records
         * for all existing highpoints. This ensures that every user has a record
         * for each highpoint, which can be updated as they complete them.
         */
        static::created(function (User $user) {
            // Get all highpoints from the database
            $highpoints = Highpoint::all();
            
            // Create a HighpointUser record for each highpoint
            foreach ($highpoints as $highpoint) {
                HighpointUser::create([
                    'user_id' => $user->id,
                    'highpoint_id' => $highpoint->id,
                    'completed' => false,        // Initially not completed
                    'completion_date' => null,   // No completion date yet
                    'notes' => null,            // No notes initially
                ]);
            }
        });
    }
}
