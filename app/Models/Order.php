<?php

namespace App\Models;

use App\Traits\UUIDTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, UUIDTrait;

    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'email',
        'mobile',
        'state',
        'country',
        'account_number',
        'account_name',
        'bank_name',
        'btc_amount',
        'local_amount',
        'screenshot',
    ];

    public function getNameAttributes()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}