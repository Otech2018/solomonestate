<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_r extends Model
{
    use HasFactory;

    
	protected $fillable = [


     		'amount',
            'currency',
            'cus_name',
           'cus_email',
           'cus_phone_number',
           'flw_ref',
           'status',
           'tx_ref',
           'transaction_id',
            
        ];
}
