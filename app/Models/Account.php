<?php

namespace App\Models;

use Brick\Money\Money;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    use HasUuids, HasFactory;

    protected $casts = [
        'initial_balance' => 'integer',
        'initial_balance_date' => 'date',
    ];

    public function getBalanceAttribute(): Money
    {
        $balance = $this->transactions()
            ->whereBetween('date', [
                $this->initial_balance_date,
                now()->toDateString()
            ])
            ->sum('amount') + $this->initial_balance;

        return Money::of($balance, $this->currency);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
