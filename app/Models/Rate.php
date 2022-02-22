<?php

namespace App\Models;

use App\Traits\UUIDTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory, UUIDTrait;
    protected $fillable = [
        'country', 'value', 'amount_in_usd', 'status',
    ];
}