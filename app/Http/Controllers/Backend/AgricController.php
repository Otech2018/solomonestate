<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Customs\CheckAccess;
use App\Http\Controllers\Controller;
use App\Models\Agric;
use Illuminate\Http\Request;

class AgricController extends Controller
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
        //list all agric consult request
        if(CheckAccess::check(46)){
            $agrics = Agric::where('status','!=',0)->paginate(150);
             $type= "All";
            return view('backend.agric.index',['agrics'=>$agrics, 'type'=>$type]);
 
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
        //list all pending agric consult request
        if(CheckAccess::check(47)){
            $agrics = Agric::where('status',2)->paginate(150);
            $type= "Pending";
            return view('backend.agric.index',['agrics'=>$agrics, 'type'=>$type]);
 
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //View Details of agric consultancy request
         $agrics = Agric::find($id);
             return view('backend.agric.show',['agrics'=>$agrics]);
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
        //set agric request as solved
          $Agric = Agric::find($id);
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
