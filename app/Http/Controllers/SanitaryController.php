<?php

namespace App\Http\Controllers;

use App\Models\Sanitary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SanitaryController extends Controller
{
    //
    // public function uploadSanitary(Request $request){
    //     $user=auth()->user();
    //     $sanitary=new Sanitary();
    //     $sanitary->project_name =$request->project_name;
    //     $sanitary->details =$request->details;
    //     if ($request->hasfile('image')) {
    //         $file =$request->file('image');
    //         $extension = $file->getClientOriginalExtension(); // getting image extens
    //         $filename=time() . '.' . $extension;
    //         $file->move('uploads/',$filename);
    //         $sanitary->image=$filename;
    //        } else {
    //         return $request;
    //         $sanitary->image='';
    //        }
    //       $sanitary->save();
    //       return redirect()->back()->with('success', 'Data has been saved successfully.');
    // }

    public function uploadSanitary(Request $request)
    {
        $image = array ();
            if($files = $request->file('image' )){
            foreach ($files as $file) {
            $image_name = md5(rand (1000, 10000));
            $ext = strtolower ($file->getClientOriginalExtension ());
            $image_full_name = $image_name. '. ' .$ext;
            $upload_path = 'uploads/';
            $image_url = $upload_path. $image_full_name;
            $file->move($upload_path, $image_full_name);
            $image[] = $image_url;
        }
    }
    Sanitary::insert([
        'image' => implode('|', $image),
        'project_name'=>$request->project_name,
        'details'=>$request->details,
    ]);
        return back() ;
    }

    public function getSanitary(){
        $data= Sanitary::All();
       // where('category','architecture')->get();
        return view('sanitary',['data'=>$data]);
        //return DB::select ("select * from services");
      }
}
