<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SaleHouse;
use Illuminate\Http\Request;

class HouseSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // save form from house for sale or rent 
        $data =    $this->validate($request, [
                    'fname',
                     'mname',
                     'lname',
                    'email',
                    'dob',
                    'gender',
                    'kindred',
                    'village',
                    'town',
                    'country',
                    'state',
                    'state1',
                    'lga',
                    'lga1',
                    'office_address',
                    'phone1',
                    'phone2',
                    'land_acquired_by',
                    'land_acquired_by_2',
                    'land_surveyed',
                    'plan_number',
                    'beacon_number',
                    'surveyor',
                    'surveyor_address',
                    'no_of_plots',
                    'size_in_sq_meters',
                    'land_Shape',
                    'land_doc_avaliable',
                    'property_mode',
                    'full_sell_price',
                    'sell_price',
                    'rent_price',
                    'landmark',
                    'id_card',
                    'id_card_no',
                    'id_card_issued_date',
                    'id_card_exp_date',
                    'house_description',
           
                    'passport'=>'image|required|max:1999',
                    'cover_image'=>'image|required|max:1999',
                    'image1'=>'image|required|max:1999',
                    'image2'=>'image|required|max:1999',
                    'image3'=>'image|required|max:1999',
                    'image4'=>'image|required|max:1999',
                    'image5'=>'image|required|max:1999',
                    'image6'=>'image|required|max:1999',
                    'purchase_recipt'=>'image|max:1999',
                    'allocation_paper'=>'image|max:1999',
                    
            ]);

                      
                        $extension = $request->file('passport')->getClientOriginalExtension();
                        $fileNameToStorea = time().'a.'.$extension;
                        $pathp = $request->file('passport')->storeAs('public/sale_house_images', $fileNameToStorea);


                        $extension = $request->file('cover_image')->getClientOriginalExtension();
                        $fileNameToStore = time().'.'.$extension;
                        $path = $request->file('cover_image')->storeAs('public/sale_house_images', $fileNameToStore);

                         $extension1 = $request->file('image1')->getClientOriginalExtension();
                        $fileNameToStore1 = time().'1.'.$extension1;
                        $path1 = $request->file('image1')->storeAs('public/sale_house_images', $fileNameToStore1);


                        $extension2 = $request->file('image2')->getClientOriginalExtension();
                        $fileNameToStore2 = time().'2.'.$extension2;
                        $path2 = $request->file('image2')->storeAs('public/sale_house_images', $fileNameToStore2);

                        $extension3 = $request->file('image3')->getClientOriginalExtension();
                        $fileNameToStore3 = time().'3.'.$extension3;
                        $path3 = $request->file('image3')->storeAs('public/sale_house_images', $fileNameToStore3);

                        $extension4 = $request->file('image4')->getClientOriginalExtension();
                        $fileNameToStore4 = time().'4.'.$extension4;
                        $path4 = $request->file('image4')->storeAs('public/sale_house_images', $fileNameToStore4);

                        $extension5 = $request->file('image5')->getClientOriginalExtension();
                        $fileNameToStore5 = time().'5.'.$extension5;
                        $path5 = $request->file('image5')->storeAs('public/sale_house_images', $fileNameToStore5);


                        $extension6 = $request->file('image6')->getClientOriginalExtension();
                        $fileNameToStore6 = time().'6.'.$extension6;
                        $path6 = $request->file('image6')->storeAs('public/sale_house_images', $fileNameToStore6);


                        if($request->hasFile('purchase_recipt')){
                            $extension7 = $request->file('purchase_recipt')->getClientOriginalExtension();
                        $fileNameToStore7 = time().'7.'.$extension7;
                        $path7 = $request->file('purchase_recipt')->storeAs('public/sale_house_images', $fileNameToStore7);
               
                        $purchase_recipt =    ['purchase_recipt'=>$fileNameToStore7];   
                        }else{
                            $purchase_recipt = null;
                        }



                        if($request->hasFile('allocation_paper')){
                            $extension8 = $request->file('allocation_paper')->getClientOriginalExtension();
                        $fileNameToStore8 = time().'8.'.$extension8;
                        $path8 = $request->file('allocation_paper')->storeAs('public/sale_house_images', $fileNameToStore8);
               
                        $allocation_paper =     ['allocation_paper'=>$fileNameToStore8],    
                        }else{
                            $allocation_paper = null;
                        }


                SaleHouse::create( array_merge(
                    $data,
                     ['passport'=>$fileNameToStorea],
                     ['cover_image'=>$fileNameToStore],
                    ['image1'=>$fileNameToStore1],
                    ['image2'=>$fileNameToStore2],
                    ['image3'=>$fileNameToStore3],
                    ['image4'=>$fileNameToStore4],
                    ['image5'=>$fileNameToStore5],
                    ['image6'=>$fileNameToStore6], 
                    $purchase_recipt,   
                    $allocation_paper,
                    ['status'=>2],    
                   
                ));
                return redirect()->back()->with('success','Submitted Successfully!, We will contact you as soon as possible');
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
        //
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
