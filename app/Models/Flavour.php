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
        'shop_id',
        'manufacturer_id',
        'name',
        'category_id',
        'minimum_quantity',
        'is_active'
    ];

    /**
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    /**
     * @return BelongsTo
     */
    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class);
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
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
