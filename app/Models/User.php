<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const IS_ACTIVE = [
        'inactive' => 0,
        'active' => 1
    ];

    const GENDER = [
        'male' => 0,
        'female' => 1
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'position_id',
        'firstname',
        'lastname',
        'nickname',
        'gender',
        'birthday',
        'email',
        'staff_code',
        'profile_image_url',
        'is_active',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * @return HasOne
     */
    public function position(): HasOne
    {
        return $this->hasOne(Position::class);
    }

    /**
     * @return BelongsToMany
     */
    public function shops(): BelongsToMany
    {
        return $this->belongsToMany(Shop::class, 'shop_user', 'user_id', 'shop_id');
    }

    /**
     * @return BelongsToMany
     */
    public function abilities(): BelongsToMany
    {
        return $this->belongsToMany(Ability::class, 'ability_user', 'user_id', 'ability_id');
    }

    /**
     * @return HasMany
     */
    public function stocking_histories(): HasMany
    {
        return $this->hasMany(StockingHistory::class);
    }

    /**
     * @return HasMany
     */
    public function refill_histories(): HasMany
    {
        return $this->hasMany(RefillHistory::class);
    }
}
