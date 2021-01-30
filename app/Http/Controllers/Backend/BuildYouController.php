<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Http\Controllers\Controller;
use App\Models\BuildForYou;
use Illuminate\Http\Request;

class BuildYouController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['except'=>['store']]);
    } 


    public function index()
    {
        //  //list all Let's build for you request
        if(CheckAccess::check(49)){
            $BuildForYous = BuildForYou::where('status','!=',0)->paginate(20);
             $type= "All";
            return view('backend.buildforyou.index',['BuildForYous'=>$BuildForYous, 'type'=>$type]);
 
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
        ////list all pending let's build for you  request
        if(CheckAccess::check(50)){
            $BuildForYous = BuildForYou::where('status',2)->paginate(20);
            $type= "Pending";
            return view('backend.buildforyou.index',['BuildForYous'=>$BuildForYous, 'type'=>$type]);
 
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
        //store build for you from users end
  $data = $this->validate($request, [
                'name' => 'required|string|max:255',
                'email' => '',
                'phone1' => 'required',
                'phone2' => '',
                'state' => '',
                'state1' => '',
                'lga' => '',
                'lga1' => '',
                'country' => 'required',
                'location_address' => 'required',
                'address' => 'required',
                'budget_amount' => 'required',
                'description' => 'required',
        ]);


             $BuildForYou = BuildForYou::create(array_merge(
                        $data,
                        ['status' => 2]
                    ));
                    return redirect()->back()->with('success','Form Submmited Successfully!! we will get back to you as soon as possible. Thank You!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // //View Details of let's build for you request
         $agrics = BuildForYou::find($id);
             return view('backend.buildforyou.show',['agrics'=>$agrics]);
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
        // //set lets build for you request as solved
          $Agric = BuildForYou::find($id);
            $Agric->status =1;
            $Agric->save(); 
            return redirect()->back()->with('success','Solved Successfully!');
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
