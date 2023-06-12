<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    //
    public function upload(Request $request)
  {
    

      $user=auth()->user();
      $services=new Service();
      $services->name =$request->name;
      $services->category=$request->category;
      $services->details =$request->details;
      // $services =$request->file('image');
     // $name=$request->file('image')->getClientOriginalName()
      // $size =$request ->file('image')->getSize();
      //$request->file('image')->store('public/uploads/');
     
      //$services->image=$request->image;
      //$services= $request->photo->upload('image');
      // $services = $request->file('image');
      // $services= $request->image;
      
      if ($request->hasfile('image')) {
        $file =$request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extens
        $filename=time() . '.' . $extension;
        $file->move('uploads/',$filename);
        $services->image=$filename;
       } else {
        return $request;
        $services->image='';
       }
      $services->save();
    
        
         
      return redirect()->back()->with('success', 'Data has been saved successfully.');
  
     
    
  }
  public function getArchitecture(){
    $data= Service::All();
   // where('category','architecture')->get();
    return view('architecture',['data'=>$data]);
    //return DB::select ("select * from services");
  }
}
