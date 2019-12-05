<?php

namespace App\Http\Controllers;
use App\Room;
use App\Visiter;
use Carbon\Carbon;
use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
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
        $data=Booking::with('room')->with('visiter')->get();
        $room=Room::all();
        $visiter=Visiter::all();
        return view('admin.booking.index',['data'=>$data,'visiter'=>$visiter,'room'=>$room]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room=Room::findOrFail($request->room_id);
        $duration=Carbon::parse($request->end_date)->diffInDays(Carbon::parse($request->start_date));
        $request['duration'] =$duration;
        $request['price'] =$room->price * $duration;
        // return  $request->price;
        // return $request->all();
        Booking::create($request->all());
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
        $edit=Booking::findOrFail($id);
        return view('admin.booking.update',['edit'=>$edit]);
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
        $room=Room::findOrFail($request->room_id);
        $duration=Carbon::parse($request->end_date)->diffInDays(Carbon::parse($request->start_date));
        $request['duration'] =$duration;
        $request['price'] =$room->price * $duration;
        // return $request->all();
        Booking::where('id',$request->id)->update(['id'=>$request->id,'visiter_id'=>$request->visiter_id,'start_date'=>$request->start_date,'end_date'=>$request->end_date,'duration'=>$request->duration,'price'=>$request->price,'status'=>1,'room_id'=>$request->room_id]);
        return redirect()->action('BookingController@create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Futurebooking  $Roomclass
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::where('id',$id)->delete();
        return back();
    }
}
