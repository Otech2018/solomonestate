<?php

namespace App\Models;

use App\Models\GigCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class GigSubCategory extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = [];

    public function gig_category()
    {
    	return $this->belongsTo(GigCategory::class);
    }

    public function sluggable(){
        return [
            'sub_category_slug' => [
                'source' => 'sub_category_name'
            ]
            ];
    }
}
