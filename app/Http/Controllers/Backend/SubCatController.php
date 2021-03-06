<?php  

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Http\Controllers\Controller;
use App\Models\GigCategory;
use App\Models\GigSubCategory;
use App\Models\Lga;
use App\Models\State;
use Illuminate\Http\Request;

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
            $states = State::all();
            $lgas = Lga::all();
            return view('backend.sub_gigs.create',[
                'GigCategorys'=>$GigCategorys,
                'states' => $states,
                'lgas' => $lgas
            ]);
            
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
                    'lga_id' => 'required|max:255',
                    'state_id' => 'required|max:255',
                    'no_bedrooms' => 'max:255',
                    'no_bathrooms' => 'max:255',
                    'land_size' => 'max:255',
                    'cover_image'=>'image|required|max:1999',
                    'cover_image1'=>'image|required|max:1999',
                    'cover_image2'=>'image|required|max:1999',
                    'cover_image3'=>'image|required|max:1999',
                    'cover_image4'=>'image|required|max:1999',
                    'cover_image5'=>'image|required|max:1999',
                    'cover_image6'=>'image|required|max:1999',
                    
            ]);
                $youtube_video = $request->input('youtube_video');
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

                    $featur = chop($featur,'*');

                GigSubCategory::create( array_merge(
                    $data,
                     ['cover_image'=>$fileNameToStore],
                    ['cover_image1'=>$fileNameToStore1],
                    ['cover_image2'=>$fileNameToStore2],
                    ['cover_image3'=>$fileNameToStore3],
                    ['cover_image4'=>$fileNameToStore4],
                    ['cover_image5'=>$fileNameToStore5],
                    ['cover_image6'=>$fileNameToStore6],    
                    ['youtube_video'=>$youtube_video],    
                    ['feature'=>$featur],    
                    ['user_id'=>auth()->user()->id]   

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
    public function edit(Request $request, $id){

    }
    public function fea(Request $request, $id)
    {
          //Remove Featured
        if(CheckAccess::check(6)){
            $GigSubCategory = GigSubCategory::find($id);
            $GigSubCategory->featured =0;
            $GigSubCategory->save();
            return redirect()->back()->with('success','Featured Removed!');
        
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
         //Set Featured
        if(CheckAccess::check(6)){
            $GigSubCategory = GigSubCategory::find($id);
            $GigSubCategory->featured =1;
            $GigSubCategory->save();
            return redirect()->back()->with('success','Set As a Featured Property!');
        
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
          //Delete
        if(CheckAccess::check(6)){
            $GigSubCategory = GigSubCategory::find($id);
            $GigSubCategory->status =0;
            $GigSubCategory->save();
            return redirect()->back()->with('success','Property Deleted Successfully!');
        
        }else{
            return redirect(route('admin.dashboard'))->with('error','Unauthorized Page. Access Denied!!!');
        }
    }



    public function subgigs($id)
    {

         //listing all the gigs category
         if(CheckAccess::check(5)){
            $GigSubCategories = GigSubCategory::where('gig_category_id','=',$id)->where('status',1)->paginate(20);
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
