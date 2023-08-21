<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InteriorDesigning;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\File;


class InteriordesigningController extends Controller
{
    //
    // public function uploadInteriorDesigning(Request $request){
    //     $user=auth()->user();
    //     $interiordesigning=new InteriorDesigning();
    //     $interiordesigning->project_name =$request->project_name;
    //     $interiordesigning->details =$request->details;
    //     if ($request->hasfile('image')) {
    //         $file =$request->file('image');
    //         $extension = $file->getClientOriginalExtension(); // getting image extens
    //         $filename=time() . '.' . $extension;
    //         $file->move('uploads/',$filename);
    //         $interiordesigning->image=$filename;
    //        } else {
    //         return $request;
    //         $interiordesigning->image='';
    //        }
    //       $interiordesigning->save();
    //       return redirect()->back()->with('success', 'Data has been saved successfully.');
    // }
    public function uploadInteriorDesigning(Request $request)
    {
        $thumbnail = array();
        if ($files = $request->file('thumbnail')) {
            foreach ($files as $file) {
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'uploads/';
            $image_url = $upload_path.$image_full_name;
            $file->move($upload_path, $image_full_name);
            $thumbnail[] = $image_url;
        }
        }
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
    InteriorDesigning::insert([
        
        'project_name'=>$request->project_name,
        'details'=>$request->details,
        'image' => implode('|', $image),
        'thumbnail' => implode('|', $thumbnail),
    ]);
        return back() ;
    }

    public function getThumbnail(){
        $data= InteriorDesigning::All();
       // where('category','architecture')->get();
        return view('architecture',['data'=>$data]);
        //return DB::select ("select * from services");
      }
    public function getInteriorDesigning($id){
        //$data=InteriorDesigning::find($id);
        // $ids = DB::table('interiordesignings')->pluck('id');
         //$data=DB::table('interiordesignings')->pluck('image');
        //$data= InteriorDesigning::All();
       // where('category','architecture')->get();
        //return view('projectgallery',['data'=>$data]);
       // return DB::select ("select * from services");
    //     $data = DB::table('interiordesignings')->pluck('id', 'image');

    //     $images = [];
    
    //     foreach ($data as $image) {
    //         $images[] = explode(',', $image);
    //     }
    
    //     return view('projectgallery', compact('images'));
    $data = DB::table('interiordesignings')->where('id', $id)->pluck('image');
    return view('projectgallery', compact('data'));
    // $data = DB::table('interiordesignings')->select('id', 'image')->get();

    // $imagesByIDs = [];

    // foreach ($data as $item) {
    //     $imagesByIDs[$item->id] = explode(',', $item->image);
    // }

    // return view('projectgallery', compact('imagesByIDs'));  
}

}
