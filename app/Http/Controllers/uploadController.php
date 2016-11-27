<?php

namespace NotAnotherInstagramClone\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class uploadController extends Controller
{
    function show ()
    {
        return view('upload');    
    }
    
    function upload(Request $request)
    {
        
        if($request->hasFile('slika'))
        {
            $file = $request->file('slika');
            $path= 'slike';
            //$ext=$file->getClientOriginalExtension();
            $name = 'temp.jpg';
           
           $file->storeAs($path, $name);
            
            $file->move($path,$name);
            
            $img = Image::make('slike/temp.jpg');
           
          //  $img = Image::make($request->file('slika')->getRealPath());
            $img->resize(1024, 1024);
           $img->save('slike/temp.jpg');
           $img->save('slike/temp1.jpg');
           //$path = $request->slika->store('slike');
            
        }
        
        
       return redirect('formUpload');
    }

    public function formUpload()
    {
        return view('formUpload');
    }
}
