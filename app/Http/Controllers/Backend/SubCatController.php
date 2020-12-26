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
            
             $data =    $this->validate($request, [
                    'sale_mode' => 'required|max:255',
                    'gig_category_id' => 'required|max:255',
                    'sub_category_name' => 'required|max:255',
                    'property_desc' => 'required|max:99999',
                    'property_price' => 'required|max:255',
                    'property_type' => 'required|max:255',
                    'no_bedrooms' => 'max:255',
                    'no_bathrooms' => 'max:255',
                    'land_size' => 'max:255',
                    'youtube_video' => 'max:9999',
                    'cover_image'=>'image|required|max:1999',
                    'cover_image1'=>'image|required|max:1999',
                    'cover_image2'=>'image|required|max:1999',
                    'cover_image3'=>'image|required|max:1999',
                    'cover_image4'=>'image|required|max:1999',
                    'cover_image5'=>'image|required|max:1999',
                    'cover_image6'=>'image|required|max:1999',
                    
            ]);

                        $extension = $request->file('cover_image')->getClientOriginalExtension();
                        $fileNameToStore = time().'.'.$extension;
                        $path = $request->file('cover_image')->storeAs('public/admin_property_images', $fileNameToStore);

                         $extension1 = $request->file('cover_image1')->getClientOriginalExtension();
                        $fileNameToStore1 = time().'1.'.$extension1;
                        $path1 = $request->file('cover_image1')->storeAs('public/admin_property_images', $fileNameToStore1);


                        $extension2 = $request->file('cover_image2')->getClientOriginalExtension();
                        $fileNameToStore2 = time().'2.'.$extension2;
                        $path2 = $request->file('cover_image2')->storeAs('public/admin_property_images', $fileNameToStore2);

                        $extension3 = $request->file('cover_image3')->getClientOriginalExtension();
                        $fileNameToStore3 = time().'3.'.$extension3;
                        $path3 = $request->file('cover_image3')->storeAs('public/admin_property_images', $fileNameToStore3);

                        $extension4 = $request->file('cover_image4')->getClientOriginalExtension();
                        $fileNameToStore4 = time().'4.'.$extension4;
                        $path4 = $request->file('cover_image4')->storeAs('public/admin_property_images', $fileNameToStore4);

                        $extension5 = $request->file('cover_image5')->getClientOriginalExtension();
                        $fileNameToStore5 = time().'5.'.$extension5;
                        $path5 = $request->file('cover_image5')->storeAs('public/admin_property_images', $fileNameToStore5);


                        $extension6 = $request->file('cover_image6')->getClientOriginalExtension();
                        $fileNameToStore6 = time().'6.'.$extension6;
                        $path6 = $request->file('cover_image6')->storeAs('public/admin_property_images', $fileNameToStore6);

                    $features =$request->input('feature');
                    $featur ="";
                    foreach($features as $feature){
                        $featur = $featur." ".$feature;
                    }

                GigSubCategory::create( array_merge(
                    $data,
                     ['cover_image'=>$fileNameToStore],
                    ['cover_image1'=>$fileNameToStore1],
                    ['cover_image2'=>$fileNameToStore2],
                    ['cover_image3'=>$fileNameToStore3],
                    ['cover_image4'=>$fileNameToStore4],
                    ['cover_image5'=>$fileNameToStore5],
                    ['cover_image6'=>$fileNameToStore6],    
                    ['feature'=>$featur],    

                ));
                return redirect()->back()->with('success','Property Created Successfully!');
       

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
