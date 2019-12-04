<?php

namespace App\Http\Controllers;

use App\Floor;
use Illuminate\Http\Request;

class FloorController extends Controller
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
        $floor=Floor::all();
        return view('admin.floor.index',['floor'=>$floor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Floor::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function show(floor $floor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Floor::findOrFail($id);
        return view('admin.floor.update',['edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return $request->name;
        Floor::where('id',$request->id)->update(['id'=>$request->id,'name'=>$request->name]);
        return redirect()->action('FloorController@create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function destroy(floor $floor,$id)
    {
        Floor::where('id',$id)->delete();
        return back();
    }
}
