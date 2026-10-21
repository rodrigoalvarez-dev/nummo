<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['amount', 'description', 'date', 'type', 'status', 'certainty', 'user_id', 'category_id', 'account_id', 'group_id', 'recurrence_id'])]
#[Table('transactions')]
class Transaction extends Model
{
    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
            'date' => 'datetime',
            'type' => TransactionType::class,
            'status' => TransactionStatus::class,
            'certainty' => TransactionCertainty::class,
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function recurrence(): BelongsTo
    {
        return $this->belongsTo(Recurrence::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
