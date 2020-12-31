<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessment extends Model
{
    use HasFactory;
    protected $guarded = [];

    
    public function user_assessment()
    {
        return $this->hasMany(UserAssessment::class);
    }
}
