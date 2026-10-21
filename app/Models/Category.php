<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

/**
 * Separate transactions in different topics
 */
#[Fillable(['name', 'user_id'])]
#[Table('categories')]
class Category extends Model
{
    private int $id;

    private string $name;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
