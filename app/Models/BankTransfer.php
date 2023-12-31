<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankTransfer extends Model
{
    use HasFactory;
    protected $fillable = [
        'from_account',
        'to_account',
        'amount',
        'date',
        'payment_method',
        'reference',
        'description',
        'created_by',
    ];
    public function SenderBankAccount()
    {
        return $this->hasOne(BankAccount::class, 'id', 'sender_id')->first();
    }

    public function ReceiverBankAccount()
    {
        return $this->hasOne(BankAccount::class, 'id', 'receiver_id')->first();
    }

}
