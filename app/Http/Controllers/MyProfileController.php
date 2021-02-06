<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MyProfileController extends Controller
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
        return view('myprofile.index');
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
        return view('myprofile.edit');
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

        $this->validate($request, [
            'first_name' => 'required|string|max:255',
           'middle_name' => 'required|string|max:955',
           'last_name' => 'required|string|max:955',
           'phone' => 'required|string|unique:users|max:955',
           'gender' => 'required|string|max:955',
            ]);

        $Admin =User::find(auth()->user()->id);


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

            if(auth()->user()->pic !=null){
              //  unlink("storage/profile_img/".auth()->user()->pic); //delete existing file
            
            }
            $path = $request->file('cover_image')->storeAs('public/profile_img', $fileNameToStore);
            
        }


         $Admin->first_name= $request->input('first_name');
         $Admin->middle_name= $request->input('middle_name');
         $Admin->last_name= $request->input('last_name');
         $Admin->phone= $request->input('phone');
         $Admin->gender= $request->input('gender');
         if($request->hasFile('cover_image')){
            $Admin->pic= $fileNameToStore;
        }
            $Admin->save();
                return redirect()->back()->with('success','Profile Updated  Successfully!');
        

                
    }



    public function change_password(Request $request, $id)
    {
       
        $this->validate($request, [
            'old_password' => 'required|string|max:255',
           'new_password' => 'required|string|max:955',
           'confirm_password' => 'required|string|max:955',
            ]);

        $Admin =User::find($id);
        $old_pw_hash = Hash::make($request->input('old_password'));
        if( password_verify($request->input('old_password'), auth()->user()->password) ){
            //password_verify(password,hash)
            if($request->input('new_password') == $request->input('confirm_password')){
                $Admin->password= Hash::make($request->input('new_password'));
                 $Admin->save();
                return redirect()->back()->with('success','Password Changed Successfully!');
        

            }else{
                return redirect()->back()->with('error','Password Not Match!!!');
            }

        }else{
            return redirect()->back()->with('error','Wrong Old Password !!!');
        }


    }



    public function change_password1()
    {
        return view('myprofile.change_password');
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
