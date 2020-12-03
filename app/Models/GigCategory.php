<?php

namespace App\Models;

use App\Models\GigSubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class GigCategory extends Model
{
    use HasFactory; 
    use Sluggable;
    protected $guarded = [];

    public function gig_sub_categories()
    {
    	return $this->hasMany(GigSubCategory::class);
    }

    public function sluggable(){
        return [
            'category_slug' => [
                'source' => 'category_name'
            ]
        ];
    }

    public function buyer_gig()
    {
        return $this->hasOne(BuyersGig::class);
    }
}
