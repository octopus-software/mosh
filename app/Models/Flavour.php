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

    // リレーション設定
    public function shops(): BelongsTo
    {
        return $this->belongsTo(Shop::class,'shop_id','id');
    }

    // リレーション設定
    public function manufacturers(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class,'manufacturer_id','id');
    }

    // リレーション設定
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
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
