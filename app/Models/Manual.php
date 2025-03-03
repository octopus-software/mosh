<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Manual extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'manual_group_id',
        'name',
        'manual_file_url',
        'sort_number'
    ];

    // リレーション設定
    public function manuals(): BelongsTo
    {
        return $this->belongsTo(ManualGroup::class);
    }
}
