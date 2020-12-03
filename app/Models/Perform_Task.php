<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perform_Task extends Model
{
    use HasFactory;


    public function task()
{
    return $this->belongsTo('App\Models\Task','task_id');
}


public function menu()
{
    return $this->belongsTo('App\Models\Menu','menu_id');
}


}
