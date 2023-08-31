<?php

namespace App\Http\Controllers;
use App\Models\Architecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\File;




class ArchitectureController extends Controller
{
    public function index()
    {
        return view('architectureupload');
    }
    //
//     public function uploadArchitecture(Request $request){
//         $user=auth()->user();
//         $architecture=new Architecture();
//         $architecture->project_name =$request->project_name;
//         $architecture->details =$request->details;
//         if ($request->hasfile('image')) {
//             $file =$request->file('image');
//             $extension = $file->getClientOriginalExtension(); // getting image extens
//             $filename=time() . '.' . $extension;
//             $file->move('uploads/',$filename);
//             $architecture->image=$filename;
//            } else {
//             return $request;
//             $architecture->image='';
//            }
//           $architecture->save();
//           return redirect()->back()->with('success', 'Data has been saved successfully.');
      

// }

public function uploadArchitecture(Request $request)
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
    Architecture::insert([
        'image' => implode('|', $image),
        'project_name'=>$request->project_name,
        'details'=>$request->details,
    ]);
        return back() ;
    }

    // public function getArchitecture(){
    //     $data= Architecture::All();
    //    // where('category','architecture')->get();
    //     return view('architecture',['data'=>$data]);
    //     //return DB::select ("select * from services");
    //   }
      public function getaProjects(){
        $data= Architecture::whereIn('id', [1, 2, 3, 4, 5, 7,8])->get();
        return view('homee', ['data' => $data]);
    }
    
    public function getArchitecture($id){
        $data = DB::table('architectures')->where('id', $id)->pluck('image');
        return view('projectgallery', compact('data'));
    }
}

