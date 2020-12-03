<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_group extends Model
{
    use HasFactory;



    public function admin(){
        return $this->belongsTo('App\Models\Admin','id');
    }
}
