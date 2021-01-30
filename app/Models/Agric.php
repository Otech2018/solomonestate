<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agric extends Model
{

	protected $fillable = [
        'name',
        'phone',
        'email',
        'budget',
        'site_location',
        'why_u_need_us',
        'status',
    ];
    use HasFactory; 
}
