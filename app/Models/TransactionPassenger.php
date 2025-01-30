<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionPassenger extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'transaction_id',
        'flight_seat_id',
        'name',
        'date_of_birth',
        'nasionality',
    ];

    public function transactions()
    {
        return $this->belongsTo(Transaction::class);
    }
}
