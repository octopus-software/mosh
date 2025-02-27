<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name'
    ];

    // リレーション設定
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'shop_user', 'shop_id', 'user_id');
    }

    // リレーション設定
    public function flavours(): HasMany
    {
        return $this->hasMany(Flavour::class);
    }

    // リレーション設定
    public function refill_histories(): BelongsTo
    {
        return $this->belongsTo(RefillHistory::class);
    }
}
