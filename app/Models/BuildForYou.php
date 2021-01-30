<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildForYou extends Model
{

	protected $fillable = [
          'name',
	        'email',
	        'phone1',
	        'phone2',
	        'state',
	        'state1',
	        'lga',
	        'lga1',
	        'country',
	        'location_address',
	        'address',
            'budget_amount',
            'description',
            'status',
    ];


    use HasFactory;


    public function country_det()
{
    return $this->belongsTo('App\Models\Country','country');
}

}
