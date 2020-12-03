<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
  
class MenuController extends Controller
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
         if(auth()->user()->user_type ==1){
            $menus = Menu::where('status','=','1')->paginate(20);
           return view('backend.Menu.index',['menus'=>$menus]);
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->user_type ==1){
            return view('backend.Menu.create');
         }
         return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->user_type ==1){
            $this->validate($request, [
                'name' => 'required|string|max:255',
               'icon' => 'required|string|max:255',
                ]);

        $menu =new Menu;
        $menu->name= $request->input('name');
        $menu->desc= $request->input('description');
        $menu->icon= $request->input('icon');
        $menu->save();
        return redirect(route('menu.index'))->with('success','Menu Created Successfully!');
        }
        return redirect(route('home'))->with('error','Unauthorized Page. Access Denied!!!');
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
