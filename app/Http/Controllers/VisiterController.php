<?php

namespace App\Http\Controllers;

use App\Visiter;
use Illuminate\Http\Request;

class VisiterController extends Controller
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
        $data=Visiter::all();
        return view('admin.visiter.index',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        Visiter::create($request->all());
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
        $edit=Visiter::findOrFail($id);
        return view('admin.visiter.update',['edit'=>$edit]);
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
        Visiter::where('id',$request->id)->update(['id'=>$request->id,'name'=>$request->name,'gender'=>$request->gender,'social_status'=>$request->social_status,'phone'=>$request->phone]);
        return redirect()->action('VisiterController@create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roomclass  $Roomclass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomclass $roomclass,$id)
    {
        Visiter::where('id',$id)->delete();
        return back();
    }
}
