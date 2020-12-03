<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Models\Training;
use App\Models\Lesson;
use App\Models\LessonImg;

class LessonsController extends Controller
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
      
    }



    public function lesson_index1($id)
    {
        if(CheckAccess::check(12)){
            $Training = Training::find($id);
            $Lessons = Lesson::where('training_id',$id)->where('status',1)->get();
            return view('backend.lesson.index',['Lessons'=>$Lessons,'Training'=>$Training]);
 
            
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }



    public function lesson_content($id)
    {
        if(CheckAccess::check(13)){
           $content = Lesson::find($id);
            $Lessons = Lesson::where('training_id',$content->training_id)->where('status',1)->get();
            return view('backend.lesson.content',['Lessons'=>$Lessons,'content'=>$content]);
 
            
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
        //
        //Create A lesson
        if(CheckAccess::check(11)){
            $Trainings = Training::where('status','=','1')->get();
            return view('backend.lesson.create',['Trainings'=>$Trainings]);
 
            
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }




    public function lesson_img()
    {
        //
        //show lesson image picker
        if(CheckAccess::check(11)){
            $all_les_imgs =  LessonImg::all();
            return view('backend.lesson.lesson_img',['all_les_imgs'=>$all_les_imgs]);
            
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }


    
    public function lesson_img_store(Request $request)
    {
        //
        //Store lesson image picker
        if(CheckAccess::check(11)){

            $this->validate($request, [
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
                $path = $request->file('cover_image')->storeAs('public/lesson_img', $fileNameToStore);
            }else{
                $fileNameToStore ="noimage.jpg";
            }
            //create new poCoursest

            $LessonImg = new LessonImg;
            $LessonImg->img= $fileNameToStore;
            $LessonImg->admin_id= auth()->user()->id;
            $LessonImg->save();
            
            return redirect(route('lesson_img'))->with('success','Image Added !');
            
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
        //Store A lesson
        if(CheckAccess::check(2)){
            $this->validate($request, [
                'name' => 'required|string|max:255',
               'course' => 'required|string|max:955',
                ]);

            $Lesson =new Lesson;
            $Lesson->name= $request->input('name');
            $Lesson->training_id= $request->input('course');
            $Lesson->content= $request->input('content');
            $Lesson->status= 1;
             $Lesson->save();
            return redirect()->back()->with('success','Lesson Created Successfully!');

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
        if(CheckAccess::check(14)){
           $Lesson = Lesson::find($id);
            return view('backend.lesson.edit',['Lesson'=>$Lesson]);
 
            
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
        if(CheckAccess::check(14)){
            $this->validate($request, [
                'name' => 'required|string|max:255',
                ]);

                $Lesson = Lesson::find($id);
            $Lesson->name= $request->input('name');
            $Lesson->content= $request->input('content');
             $Lesson->save();
            return redirect()->back()->with('success','Lesson Content Edited  Successfully!');

        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }




    public function lesson_delete(Request $request, $id)
    {
        if(CheckAccess::check(15)){
          
                $Lesson = Lesson::find($id);
            $Lesson->status= 0;
             $Lesson->save();
            return redirect()->back()->with('success','Lesson Deleted !!!');

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
    public function destroy($id)
    {
        //
    }
}
