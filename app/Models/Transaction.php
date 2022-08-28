<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'checkout_date',
        'name',
        'email',
        'address',
        'payment_method',
        'name_on_card',
        'card_number',
        'status',
        'pop',
        'total',
    ];

    public function detailTransaction()
    {
        return $this->hasMany(DetailTransaction::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
