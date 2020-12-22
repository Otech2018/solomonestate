<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Models\Training;

class TrainingController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //listing all the Traiing Courses
         if(CheckAccess::check(8)){
            $Trainings = Training::where('status','=','1')->paginate(20);
           return view('backend.training.index',['Trainings'=>$Trainings]);

        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //Create A Course
        if(CheckAccess::check(7)){
            return view('backend.training.create');
            
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //Store A Course
       if(CheckAccess::check(7)){
                    $this->validate($request, [
                        'name'=>'required',
                        'desc'=>'required',
                        'cover_image'=>'image|required|max:1999'
                    ]);

                    //Handle file Upload
                    if($request->hasFile('cover_image')){
                        //Get FileName With The Extension
                        $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
                        //get just filename         
                        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                        //get just ext
                        $extension = $request->file('cover_image')->getClientOriginalExtension();

                        //fileNametostore
                      //  $fileNameToStore = $filename.'_'.time().'.'.$extension;
                        $fileNameToStore = time().'.'.$extension;
                        //upload Image
                        $path = $request->file('cover_image')->storeAs('public/training_img', $fileNameToStore);
                    }else{
                        $fileNameToStore ="noimage.jpg";
                    }
                    //create new poCoursest

                    $Training = new Training; //this Course is from App/Post; @ the top
                    $Training->name= $request->input('name');
                    $Training->description= $request->input('desc');
                    $Training->img= $fileNameToStore;
                    $Training->admin_id= auth()->user()->id;
                    $Training->save();
                    return redirect()->back()->with('success','Course Created!');


        
            }else{
                return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
            }
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
        //Edit Traiing Courses
        if(CheckAccess::check(9)){
            $Training = Training::find($id);
           return view('backend.training.edit',['Training'=>$Training]);

        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
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
        //Update Traiing Courses
        if(CheckAccess::check(9)){
          $this->validate($request, [
            'name'=>'required',
            'desc'=>'required',
        ]);
        $Training = Training::find($id);
        if($request->hasFile('cover_image')){
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename         
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //fileNametostore
          //  $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $fileNameToStore = time().'.'.$extension;
            //upload Image
            unlink("storage/training_img/".$Training->img); //delete existing file
            $path = $request->file('cover_image')->storeAs('public/training_img', $fileNameToStore);
            
        }

       
        $Training->name= $request->input('name');
        $Training->description= $request->input('desc');
        if($request->hasFile('cover_image')){
            $Training->img= $fileNameToStore;
        }
        $Training->save();
        return redirect()->back()->with('success','Course Edited Successfully!');
        

        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy1($id)
    {
        //
    }

    public function destroy(Request $request, $id)
    {
         //Edit Traiing Courses
         if(CheckAccess::check(10)){
            $Training = Training::find($id);
            $Training->status =0;
            $Training->save();
            return redirect()->back()->with('success','Course Deleted Successfully!');
        
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }
}
