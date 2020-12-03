<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Lesson extends Model
{
    use HasFactory;


     use Sluggable;

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'name'
            ]
            ];
    }



    public function training()
    {
        return $this->belongsTo('App\Models\Training');
        
    }
}



