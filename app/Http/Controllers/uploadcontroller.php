<?php

namespace App\Http\Controllers;
use App\uploader;
use Illuminate\Http\Request;

class uploadcontroller extends Controller
{
    //
   public function index(){
            
            return view('upload')->withRaju('');

    }

   public function store(Request $request) {
           $data =  $request->validate([
                'name' => 'required|mimes:jpeg,jpg,png,gif,pdf,xlsx,xls,ppt,doc,docx,|max:500000'
            ]);
            
            
      $file = $request->file('name');
   
      //Move Uploaded File
      $newname=md5(uniqid(rand(), true));
      $exr=$file->getClientOriginalExtension();
      $finalname=$newname.'.'.$exr;
    //   dd($finalname);
      $destinationPath = 'uploads';
      $file->move($destinationPath,$finalname);
      $uploader = new uploader();
    //   $finalname="27e85a4e491517b560268be0ebc0208c.gif";
      $ispresent=$uploader->where('name',$finalname);
    //   dd($ispresent->count());
      if ($ispresent->count()){
          return view('upload');
      }
      else {
        $uploader->name=$finalname;
        $uploader->save($data);      
        $ddd = asset('uploads/'.$finalname);
        return view('upload')->withRaju($ddd);
      }
        
      
            
   }
}
