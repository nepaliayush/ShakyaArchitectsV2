<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\InteriorDesigning;
use App\Models\Architecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class ServiceController extends Controller
{
    //
  //   public function upload(Request $request)
  // {
    

  //     $user=auth()->user();
  //     $services=new Service();
  //     $services->name =$request->name;
  //     $services->category=$request->category;
  //     $services->details =$request->details;

      
  //     if ($request->hasfile('image')) {
  //       $file =$request->file('image');
  //       $extension = $file->getClientOriginalExtension(); // getting image extens
  //       $filename=time() . '.' . $extension;
  //       $file->move('uploads/',$filename);
  //       $services->image=$filename;
  //      } else {
  //       return $request;
  //       $services->image='';
  //      }
  //     $services->save();
    
        
         
  //     return redirect()->back()->with('success', 'Data has been saved successfully.');
  
     
    
  // }
  public function upload(Request $request)
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
  $selectedTable = $request->input('service');
  switch ($selectedTable) {
    case 'architecture':
        DB::table('architectures')->insert([
          'project_name'=>$request->project_name,
          'details'=>$request->details,
          'image' => implode('|', $image),
          'thumbnail' => implode('|', $thumbnail),
        ]);
        alert()->success('Images Uploaded Successfully','We have posted the images');
        break;

    case 'interiordesigning':
        DB::table('interiordesignings')->insert([
          'project_name'=>$request->project_name,
          'details'=>$request->details,
          'image' => implode('|', $image),
          'thumbnail' => implode('|', $thumbnail),
        ]);
        break;
        case 'interiorproducts':
          DB::table('interiorproducts')->insert([
            'project_name'=>$request->project_name,
            'details'=>$request->details,
            'image' => implode('|', $image),
            'thumbnail' => implode('|', $thumbnail),
          ]);
          break;
          case 'sanitary':
            DB::table('sanitarys')->insert([
              'project_name'=>$request->project_name,
              'details'=>$request->details,
              'image' => implode('|', $image),
              'thumbnail' => implode('|', $thumbnail),
            ]);
            break;
    // Add cases for other tables
    default:
        // Handle invalid table selection
       
}
Alert::success('Project Uploaded Sucessfully','The image have been posted in website');
return  redirect()->back();

  }
  // InteriorDesigning::insert([
      
  //     'project_name'=>$request->project_name,
  //     'details'=>$request->details,
  //     'image' => implode('|', $image),
  //     'thumbnail' => implode('|', $thumbnail),
  // ]);
  //     //return back() ;
  //     Architecture::insert([
      
  //       'project_name'=>$request->project_name,
  //       'details'=>$request->details,
  //       'image' => implode('|', $image),
  //       'thumbnail' => implode('|', $thumbnail),
  //   ]);
  //       return back() ;
  
  
  
  public function getArchitectureThumbnail(){
    $data= Architecture::All();
    // where('category','architecture')->get();
    return view('architecture',['data'=>$data]);
    //return DB::select ("select * from services");
  }
  

  public function getInteriorThumbnail(){
    $data= InteriorDesigning::All();
   // where('category','architecture')->get();
    return view('interiordesigning',['data'=>$data]);
    //return DB::select ("select * from services");
  }
  
  public function getArchitecture($id){
    $data = DB::table('architectures')->where('id', $id)->pluck('image');
    return view('projectgallery', compact('data'));
  }

  public function getInteriorDesigning($id){
    $data = DB::table('interiordesignings')->where('id', $id)->pluck('image');
    return view('projectgallery', compact('data'));
}
}
