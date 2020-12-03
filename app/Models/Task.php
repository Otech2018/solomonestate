<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

  

    public function menu(){
        return $this->belongsTo('App\Models\Menu','menu_id');
    }
}
