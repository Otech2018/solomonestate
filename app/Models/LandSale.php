<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandSale extends Model
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
            'land_acquired_by',
            'land_acquired_by_2',
            'land_surveyed',
            'land_location',
            'plan_number',
            'beacon_number',
            'surveyor',
            'surveyor_address',
            'no_of_plots',
            'size_in_sq_meters',
            'land_Shape',
            'land_doc_avaliable',
            'property_mode',
            'sell_price',
            'rent_price',
            'landmark',
            'id_card',
            'id_card_no',
            'id_card_issued_date',
            'id_card_exp_date',
            'cover_image',
            'image1',
            'image2',
            'image3',
            'image4',
            'image5',
            'image6',
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


}
