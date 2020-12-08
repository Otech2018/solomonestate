<?php  

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Models\GigSubCategory;
use App\Models\GigCategory;

class SubCatController extends Controller
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
        if(CheckAccess::check(5)){
            $gig_cats = GigCategory::where('status','=','1')->paginate(20);
           return view('backend.sub_gigs.index',['gig_cats'=>$gig_cats]);

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
        //Create A gig sub category
        if(CheckAccess::check(4)){
            $GigCategorys = GigCategory::where('status',1)->get();
            return view('backend.sub_gigs.create',['GigCategorys'=>$GigCategorys]);
            
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
        //Create A gig sub category
        if(CheckAccess::check(4)){
            
                $this->validate($request, [
                    'name' => 'required|string|max:255',
                    'cat_id' => 'required|string|max:255',
                    
            ]);
                    
                $GigSubCategory =new GigSubCategory;
                $GigSubCategory->sub_category_name= $request->input('name');
                $GigSubCategory->category_id= $request->input('cat_id');
                $GigSubCategory->admin_id= auth()->user()->id;
                $GigSubCategory->save();
                return redirect()->back()->with('success','Sub Gig Category Created Successfully!');
       

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
        //Edit A gig sub category
        if(CheckAccess::check(6)){ 
            $GigSubCategory = GigSubCategory::find($id);
            return view('backend.sub_gigs.edit',['GigSubCategory'=>$GigSubCategory]);
            
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
        //Edit A gig sub category
        if(CheckAccess::check(6)){ 
            $this->validate($request, [
                'sub_gig_category_name' => 'required|string|max:255',
               ]);

                $GigSubCategory = GigSubCategory::find($id);
            $GigSubCategory->sub_category_name= $request->input('sub_gig_category_name');
            $GigSubCategory->save();
            return redirect()->back()->with('success','Gigs Sub Category Edited Created Successfully!');

            
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



    public function subgigs($id)
    {

         //listing all the gigs category
         if(CheckAccess::check(5)){
            $GigSubCategories = GigSubCategory::where('gig_category_id','=',$id)->paginate(20);
            $GigCategory = GigCategory::find($id);
           return view('backend.sub_gigs.index1',[
               'GigSubCategories'=>$GigSubCategories,
               'GigCategory'=>$GigCategory
               ]);

        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
}
    
}
