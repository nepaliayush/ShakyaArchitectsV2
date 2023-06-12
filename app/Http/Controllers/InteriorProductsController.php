<?php

namespace App\Http\Controllers;

use App\Models\InteriorProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InteriorProductsController extends Controller
{
    //
    public function uploadInteriorProduct(Request $request){
        $user=auth()->user();
        $interiorproducts=new InteriorProduct();
        $interiorproducts->project_name =$request->project_name;
        $interiorproducts->details =$request->details;
        if ($request->hasfile('image')) {
            $file =$request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extens
            $filename=time() . '.' . $extension;
            $file->move('uploads/',$filename);
            $interiorproducts->image=$filename;
           } else {
            return $request;
            $interiorproducts->image='';
           }
          $interiorproducts->save();
          return redirect()->back()->with('success', 'Data has been saved successfully.');
    }

}
