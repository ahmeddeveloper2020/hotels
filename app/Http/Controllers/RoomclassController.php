<?php

namespace App\Http\Controllers;

use App\Roomclass;
use Illuminate\Http\Request;

class RoomclassController extends Controller
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
        $data=Roomclass::all();
        return view('admin.roomclass.index',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Roomclass::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Roomclass  $Roomclass
     * @return \Illuminate\Http\Response
     */
    public function show(Roomclass $Roomclass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roomclass  $Roomclass
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Roomclass::findOrFail($id);
        return view('admin.roomclass.update',['edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roomclass  $Roomclass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return $request->name;
        Roomclass::where('id',$request->id)->update(['id'=>$request->id,'name'=>$request->name,'discription'=>$request->discription]);
        return redirect()->action('RoomclassController@create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roomclass  $Roomclass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomclass $roomclass,$id)
    {
        Roomclass::where('id',$id)->delete();
        return back();
    }
}
