<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function addTeam(Request $request){
        $thumbnail = array();
        if ($files = $request->file('picture')) {
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
        DB::table('teams')->insert([
            'name'=>$request->name,
            'job_title'=>$request->job_title,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'location'=>$request->location,
            'about_me'=>$request->about_me,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'linkedin'=>$request->linkedin,
            'picture' => implode('|', $thumbnail),
          ]);

        alert()->success('Booking Done Successfully','We have added your booking');
        return redirect()->back();
    }
    public function getTeam($id){
        $data = DB::table('teams')->where('id', $id)->select('picture','job_title', 'name', 'phone' ,'email','about_me','location','facebook','instagram','linkedin')->get();
        return view('profile', compact('data'));
    }
    
      
}
