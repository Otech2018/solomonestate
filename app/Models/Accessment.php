<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessment extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = [];

     public function sluggable(){
        return [
            'slug' => [
                'source' => 'topic'
            ]
        ];
    }

    public function user_assessment()
    {
        return $this->hasMany(UserAssessment::class);
    }
}
