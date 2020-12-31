<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\Customs\CheckAccess;
use Illuminate\Http\Request;
use App\Models\Accessment;






class AccessmentController extends Controller
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
         //Listing all Accessments
         if(CheckAccess::check(17)){
            $Accessments1 = Accessment::where('status',1)->paginate(20);
            return view('backend.accessment.index',['Accessments1'=>$Accessments1]);
            
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
          //Create An Accessment
          if(CheckAccess::check(16)){
            return view('backend.accessment.create');
            
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
        //Store An Accessment
        if(CheckAccess::check(16)){
            
            $this->validate($request, [
                'topic' => 'required|string|max:255',
                'keyword' => 'required|string|max:255',
                'target_country' => 'required|string|max:255',
                'sub_heading' => 'required|string|max:255',
                    'cover_image'=>'image|required|max:1999',

                
        ]);

            $extension = $request->file('cover_image')->getClientOriginalExtension();
                        $fileNameToStore = time().'.'.$extension;
                        $path = $request->file('cover_image')->storeAs('public/agent', $fileNameToStore);
                
            $Accessment =new Accessment;
            $Accessment->topic= $request->input('topic');
            $Accessment->keyword= $request->input('keyword');
            $Accessment->target_country= $request->input('target_country');
            $Accessment->sub_heading= $request->input('sub_heading');
            $Accessment->slug=  $fileNameToStore;
            $Accessment->save();
            return redirect()->back()->with('success','Agent Created Successfully!');
   
            
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
         //Listing all Submiited Accessments
         if(CheckAccess::check(30)){
            $Accessments = Accessment::where('status',3)->paginate(20);
             return view('backend.accessment.submitted_acess',['Accessments'=>$Accessments]);
            
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Edit An Accessment
        if(CheckAccess::check(18)){
            $Accessment = Accessment::find($id);
            return view('backend.accessment.edit',['Accessment'=>$Accessment]);
            
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
         //Store An Accessment
         if(CheckAccess::check(18)){
            
            $this->validate($request, [
                'topic' => 'required|string|max:255',
                'keyword' => 'required|string|max:255',
                'target_country' => 'required|string|max:255',
                
        ]);
                
            $Accessment =Accessment::find($id);

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
            unlink("storage/agent/".$Accessment->slug); //delete existing file
            $path = $request->file('cover_image')->storeAs('public/agent', $fileNameToStore);
            
        }


            $Accessment->topic= $request->input('topic');
            $Accessment->keyword= $request->input('keyword');
            $Accessment->target_country= $request->input('target_country');
            $Accessment->sub_heading= $request->input('sub_heading');

            if($request->hasFile('cover_image')){
            $Accessment->slug= $fileNameToStore;
        }
            $Accessment->save();
            return redirect()->back()->with('success','Agent Edited Successfully!');
   
            
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
    public function destroy(Request $request, $id)
    {
         //Delete Traiing Courses
         if(CheckAccess::check(19)){
            $Accessment = Accessment::find($id);
            $Accessment->status =0;
            $Accessment->save();
            return redirect()->back()->with('success','Agent Deleted Successfully!');
        
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }
}
