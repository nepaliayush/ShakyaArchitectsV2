<?php

namespace App\Http\Controllers;
use App\Models\Contactus;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //
    public function store(Request $request)
{
    $request->validate(
        [
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
            
        ]
    );
    $userStore=new Contactus();
    $userStore->name =$request->name;
    $userStore->email =$request->email;
    $userStore->phone=$request->phone;
    $userStore->message =$request->message;
    $userStore->save();
    alert()->success('Message Sent Sucessfuly','We have received your message');
    //toast('Your Post as been submited!','success');
    return redirect('/')->with('toast_success', 'Login Successfully!');


}

    public function contact(){
    $contact=ContactUs::all();
    //    $contact= ContactUs::where('message','hi')->get();
       return view('contactus',['data'=>$contact]);
        //  return view ('contactus',['contactuses'=>$contactus]);
       // return DB::select ("select * from contactuses");
       // return view ('contactus');
      
}   
public function contactdelete($id){
    $contact=ContactUs::find($id);
    $contact->delete();
    Alert::success('Message Deleted Sucessfuly','We have deleted  your message');
    return redirect()->back();
}


}
