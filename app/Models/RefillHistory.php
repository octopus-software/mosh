<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RefillHistory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'flavour_id',
        'quantity',
        'user_id',
        'inventory_history_id',
        'shop_id'
    ];

    // リレーション設定
    public function flavours(): HasMany
    {
        return $this->hasMany(Flavour::class);
    }

    // リレーション設定
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    // リレーション設定
    public function shops(): HasMany
    {
        return $this->hasMany(Shop::class);
    }

    // リレーション設定
    public function inventory_histories(): HasOne
    {
        return $this->hasOne(InventoryHistory::class);
    }
}
