<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Flavour extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'is_fixed',
        'name',
        'minimum_quantity',
        'is_active'
    ];

    // リレーション設定
    public function shops(): HasMany
    {
        return $this->hasMany(Shop::class);
    }

    // リレーション設定
    public function manufacturers(): HasMany
    {
        return $this->hasMany(Manufacturer::class);
    }

    // リレーション設定
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    // リレーション設定
    public function stocking_histories(): BelongsTo
    {
        return $this->belongsTo(StockingHistory::class);
    }

    // リレーション設定
    public function refill_histories(): BelongsTo
    {
        return $this->belongsTo(RefillHistory::class);
    }

}
