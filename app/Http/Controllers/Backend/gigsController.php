<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Models\GigCategory;

class gigsController extends Controller
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
        //listing all the gigs category
        if(CheckAccess::check(1)){
            $gig_cats = GigCategory::where('status','=','1')->paginate(20);
           return view('backend.gigs.index',['gig_cats'=>$gig_cats]);

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
         //Create A gig category
         if(CheckAccess::check(2)){
            return view('backend.gigs.create');

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
        //Create A gig category
        if(CheckAccess::check(2)){
            $this->validate($request, [
                'gig_cat' => 'required|string|max:255',
               'gig_desc' => 'required|string|max:955',
                ]);

            $new_gig =new GigCategory;
            $new_gig->category_name= $request->input('gig_cat');
            $new_gig->category_description= $request->input('gig_desc');
             $new_gig->save();
            return redirect()->back()->with('success','Property Category Created Successfully!');

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

        //Show all gigs with edit access
        if(CheckAccess::check(3)){
            $gig_cats = GigCategory::where('status','=','1')->paginate(20);
           return view('backend.gigs.index_edit',['gig_cats'=>$gig_cats]);

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
        if(CheckAccess::check(3)){
            $gig_cat = GigCategory::find($id);
            return view('backend.gigs.edit',['gig_cat'=>$gig_cat]);

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
        //Create A gig category
        if(CheckAccess::check(3)){
            $this->validate($request, [
                'gig_cat' => 'required|string|max:255',
               'gig_desc' => 'required|string|max:955',
                ]);

                $new_gig = GigCategory::find($id);
            $new_gig->category_name= $request->input('gig_cat');
            $new_gig->category_description= $request->input('gig_desc');
             $new_gig->save();
            return redirect()->back()->with('success','Edited Created Successfully!');

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
