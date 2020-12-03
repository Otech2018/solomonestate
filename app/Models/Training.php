<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Training extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = [];

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'name'
            ]
            ];
    }

    public function lessons()
    {
    	return $this->hasMany(Lesson::class);
    }
}
  