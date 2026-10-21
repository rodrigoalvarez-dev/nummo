<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'symbol', 'code', 'is_active'])]
#[Table('currencies')]
class Currency extends Model
{
    protected function casts()
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
