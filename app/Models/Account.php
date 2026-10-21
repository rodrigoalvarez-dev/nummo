<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

/**
 * Represents a user's bank account.
 */
#[Fillable(['name', 'user_id', 'currency_id'])]
#[Table('accounts')]
class Account extends Model
{
    private string $name;

    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
