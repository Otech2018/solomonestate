<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
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
           'resident_address',
           'landmark',

           'landlord_name',
           'landlord_acc_name',
           'landlord_acc_num',
           'landlord_bank',
           'landlord_phone',
            
           'start_date',
           'rent_amt',
           'rent_interval',
           'rent_interval_amt',
           'user_id',
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
    return $this->hasMany('App\Models\Payment_r','tx_ref');
}
}
