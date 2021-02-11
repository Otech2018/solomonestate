<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoSaving extends Model
{

	protected $fillable = [
        
              'fname',
             'mname',
             'lname',
            'email',
            'dob',
            'gender',
            'kindred',
            'village',
            'town',
            'country',
            'state',
            'state1',
            'lga',
            'lga1',
            'office_address',
            'phone1',
            'phone2',
            'passport',

            'acc_num',
            'acc_name',
            'acc_bank_name',

            'next_of_kin_name',
            'next_of_kin_reln',
            'next_of_kin_phone',

            'saving_purpose',
            'saving_purpose1',
            'saving_budget',
            'saving_interval',
            'saving_interval_no',
            'saving_start_date',
            'saving_interval_amt',

            'user_id',
            'buy_for_u',
            'status',
    ];

    
    use HasFactory;


       public function lga_det()
{
    return $this->belongsTo('App\Models\Lga','lga');
}


   public function state_det()
{
    return $this->belongsTo('App\Models\State','state');
}


    public function country_det()
{
    return $this->belongsTo('App\Models\Country','country');
}


    public function payments()
{
    return $this->hasMany('App\Models\Payments','tx_ref');
}



}
