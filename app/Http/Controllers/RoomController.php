<?php

namespace App\Http\Controllers;

use App\Room;
use App\Roomclass;
use App\Floor;
use Illuminate\Http\Request;

class RoomController extends Controller
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
        $data=Room::with('roomclass')->with('floor')->get();
        $roomclass=Roomclass::all();
        $floor=Floor::all();
        return view('admin.room.index',['data'=>$data,'floor'=>$floor,'roomclass'=>$roomclass]);
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
        Room::create($request->all());
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
        $edit=Room::findOrFail($id);
        return view('admin.room.update',['edit'=>$edit]);
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
        // return $request->all();
        Room::where('id',$request->id)->update(['id'=>$request->id,'name'=>$request->name,'roomclass_id'=>$request->roomclass_id,'price'=>$request->price,'status'=>0,'floor_id'=>$request->floor_id]);
        return redirect()->action('RoomController@create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roomclass  $Roomclass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomclass $roomclass,$id)
    {
        Room::where('id',$id)->delete();
        return back();
    }
}
