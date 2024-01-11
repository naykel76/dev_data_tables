<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $casts = [
        'amount' => \Naykel\Gotime\Casts\MoneyCast::class,
        'status' => \Naykel\Gotime\Enums\OrderStatus::class,
        'ordered_at' => \Naykel\Gotime\Casts\DateCast::class,
    ];
}
