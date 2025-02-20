<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class InventoryHistory extends Model
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
