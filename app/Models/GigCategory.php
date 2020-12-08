<?php

namespace App\Models;

use App\Models\GigSubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigCategory extends Model
{
    use HasFactory; 
     protected $guarded = [];

    public function gig_sub_categories()
    {
    	return $this->hasMany(GigSubCategory::class);
    }

 

    public function buyer_gig()
    {
        return $this->hasOne(BuyersGig::class);
    }
}
