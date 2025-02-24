<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ability extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'sort_number'
    ];

    // リレーション設定
    public function users(): BelongsToMany 
    {
        return $this->belongsToMany(User::class, 'ability_user', 'ability_id', 'user_id');
    }
}
