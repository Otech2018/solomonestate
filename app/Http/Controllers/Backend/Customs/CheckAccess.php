<?php
namespace App\Http\Controllers\Backend\Customs;
use App\Models\Perform_Task;
use App\Models\User;

class CheckAccess{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
    public static function check($id)
    {
        $count = Perform_Task::where('user_group_id',auth()->user()->user_type)
        ->where('task_no',$id)
        ->where('status',1)->count();
        if($count >= 1){
            return true;
        }else{
            return false;
        }
    }
}