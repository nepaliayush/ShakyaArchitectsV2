<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function booking(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'phone'=>'required',
                'subject'=>'required',
                'date'=>'required',
                'time'=>'required',
                'message'=>'required',
                
            ]
        );
        
        $bookings=new Booking();
        $bookings->name =$request->name;
        $bookings->email =$request->email;
        $bookings->phone=$request->phone;
        $bookings->subject=$request->subject;
        $bookings->date=$request->date;
        $bookings->time=$request->time;
        $bookings->message =$request->message;
        $bookings->status =$request->status;
        $bookings->save();
        Alert::html('&#10003;<br>Booking Done Successfully','We have added your booking');
        return view('landing');
        // return redirect()->back();

    }
    public function getBooking(){
        $booking=Booking::all();
        //    $contact= ContactUs::where('message','hi')->get();
           return view('booking',['data'=>$booking]);
}
public function deleteBooking($id){
    $bookings=Booking::find($id);
    $bookings->delete();
    alert()->success('Booking Deleted  Sucessfuly','We have deleted the booking');
    return redirect()->back();
}
public function edit($id)
{
    $bookings = Booking::find($id);
    return view('editbooking', compact('bookings'));
}
public function updateBooking(Request $request, $id)
{
    $bookings = Booking::find($id);
    
        $bookings->name = $request->input('name');
        $bookings->email = $request->input('email');
        $bookings->phone = $request->input('phone');
        $bookings->subject = $request->input('subject');
        $bookings->date = $request->input('date');
        $bookings->time = $request->input('time');
        // $bookings->message = $request->input('message');
        $bookings->status= $request->input('status');
        $bookings->update();
        alert()->success('Booking updated Successfully','We have updated your booking');
        return  redirect()->back();
}

}