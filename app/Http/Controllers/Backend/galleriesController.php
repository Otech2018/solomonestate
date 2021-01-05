<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;


class galleriesController extends Controller
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
         //Listing all Gellery and Project
         if(CheckAccess::check(43)){
            $Accessments1 = Gallery::where('status',1)->paginate(20);
            return view('backend.gallery.index',['Accessments1'=>$Accessments1]);
            
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
        //Create Gallery
          if(CheckAccess::check(42)){
            return view('backend.gallery.create');
            
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
          //Store Gallery
        if(CheckAccess::check(42)){
            
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'image_type' => 'required|string|max:255',
                    'cover_image'=>'image|required|max:1999',

                
        ]);

            $extension = $request->file('cover_image')->getClientOriginalExtension();
                        $fileNameToStore = time().'.'.$extension;
                        $path = $request->file('cover_image')->storeAs('public/gallery', $fileNameToStore);
                
            $Gallery =new Gallery;
            $Gallery->name= $request->input('name');
            $Gallery->description= $request->input('description');
            $Gallery->image_type= $request->input('image_type');
            $Gallery->image=  $fileNameToStore;
            $Gallery->save();
            return redirect()->back()->with('success','Gallery Created Successfully!');
   
            
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
         //Edit Gallery
        if(CheckAccess::check(44)){
            $Accessment = Gallery::find($id);
            return view('backend.gallery.edit',['Accessment'=>$Accessment]);
            
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
         if(CheckAccess::check(44)){
            
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'image_type' => 'required|string|max:255',
                
        ]);
                
            $Accessment =Gallery::find($id);

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
            unlink("storage/gallery/".$Accessment->image); //delete existing file
            $path = $request->file('cover_image')->storeAs('public/gallery', $fileNameToStore);
            
        }


            $Accessment->name= $request->input('name');
            $Accessment->description= $request->input('description');
            $Accessment->image_type= $request->input('image_type');

            if($request->hasFile('cover_image')){
            $Accessment->image= $fileNameToStore;
        }
            $Accessment->save();
            return redirect()->back()->with('success','Gallery Edited Successfully!');
   
            
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
        //Delete Gallery
         if(CheckAccess::check(45)){
            $Accessment = Gallery::find($id);
            $Accessment->status =0;
            $Accessment->save();
            return redirect()->back()->with('success','Gallery Deleted Successfully!');
        
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }
}
