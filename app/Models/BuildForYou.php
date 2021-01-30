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
    ];


    use HasFactory;
}
