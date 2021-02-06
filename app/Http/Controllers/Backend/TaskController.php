<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;  
use App\Models\Perform_Task as Perform_task;
use App\Models\Permission;  
use App\Models\Menu;   
use App\Models\User_group;   
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        if(auth()->user()->user_type ==1){
            $task = Task::where('id','>','0')->paginate(120);
            
            return view('backend.Task.index',['tasks'=>$task]);
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->user_type ==1){
            $menus = Menu::all();
            return view('backend.Task.create',['menus'=>$menus]);
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->user_type ==1){
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'descritpion' => 'required|string|max:255',
                'icon' => 'required|string|max:255',
                'taskNo' => 'required|string|max:255',
               'url' => 'required|string|max:255',
                'menu_id' => 'required|string|max:255',
        ]);
                
            $task =new Task;
            $task->name= $request->input('name');
            $task->desc= $request->input('descritpion');
            $task->icon= $request->input('icon');
            $task->task_no= $request->input('taskNo');
             $task->url= $request->input('url');
            $task->menu_id= $request->input('menu_id');
            $task->save();
            $permission = User_group::all();
            foreach( $permission as $permission){
                $perform_task =new Perform_task;
                 $perform_task->menu_id= $request->input('menu_id');
                $perform_task->status= 0;
                $perform_task->user_group_id= $permission->id;
                $perform_task->task_no= $request->input('taskNo');
                $perform_task->task_id= $task->id;   
                $perform_task->save();
            }
            return redirect(route('task.index'))->with('success','Task Created Successfully!');
            
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(auth()->user()->user_type ==2){
          
        
            $Perform_task = Perform_task::find($id);
            $Perform_task->status= $request->input('admin_task');
             $Perform_task->save();
            return redirect()->back()->with('success','Task Updated Successfully!');
            }
            return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function updateTask(Request $request, $id)
    {
        if(auth()->user()->user_type ==2){
          
        
        $Task = Task::find($id);
        $Task->status= $request->input('admin_task');
         $Task->save();
        return redirect()->back()->with('success','Task Updated Successfully!');
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
    }

    
}
