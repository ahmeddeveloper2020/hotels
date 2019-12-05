<?php

namespace App\Http\Controllers;

use App\Futurebooking;
use App\Room;
use App\Visiter;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FuturebookingController extends Controller
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
        $data=Futurebooking::with('room')->with('visiter')->get();
        $room=Room::all();
        $visiter=Visiter::all();
        return view('admin.futurebooking.index',['data'=>$data,'visiter'=>$visiter,'room'=>$room]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duration=Carbon::parse($request->end_date)->diffInDays(Carbon::parse($request->start_date));
        $request['duration'] =$duration;
        // return $du;
        // return $request->all();
        Futurebooking::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Futurebooking  $Roomclass
     * @return \Illuminate\Http\Response
     */
    public function show(Roomclass $Roomclass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Futurebooking  $Roomclass
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Futurebooking::findOrFail($id);
        return view('admin.futurebooking.update',['edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Futurebooking  $Roomclass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $duration=Carbon::parse($request->end_date)->diffInDays(Carbon::parse($request->start_date));
        $request['duration'] =$duration;
        // return $request->all();
        Futurebooking::where('id',$request->id)->update(['id'=>$request->id,'visiter_id'=>$request->visiter_id,'start_date'=>$request->start_date,'end_date'=>$request->end_date,'duration'=>$request->duration,'room_id'=>$request->room_id]);
        return redirect()->action('FuturebookingController@create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Futurebooking  $Roomclass
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Futurebooking::where('id',$id)->delete();
        return back();
    }
    
}
