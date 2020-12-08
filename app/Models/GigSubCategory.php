<?php

namespace App\Models;

use App\Models\GigCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigSubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function gig_category()
    {
    	return $this->belongsTo(GigCategory::class);
    }

}
