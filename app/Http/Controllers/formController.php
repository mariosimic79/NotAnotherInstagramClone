<?php

namespace NotAnotherInstagramClone\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use PhpAcademy\Image\Filters;

class formController extends Controller
{
    public function index()
    {
        return view('formUpload');
    }
    
    
    public function form()
    {
        $button = $_POST['sub'];
        
        if($button == 'prew')
        {
            $filterValue = $_POST['filter'];
            
            if($filterValue == "none")
            {       
                $image = Image::make('slike/temp.jpg');
                $image->save('slike/temp1.jpg');
            }
            else if($filterValue == "antique")
            {       
                $image = Image::make('slike/temp.jpg');
                $image->filter(new Filters\AntiqueFilter());
                $image->save('slike/temp1.jpg');
            }
            else if($filterValue == "blur")
            {       
                $image = Image::make('slike/temp.jpg');
                $image->filter(new Filters\BlurFilter());
                $image->save('slike/temp1.jpg');
            }
            else if($filterValue == "chrome")
            {
                $image = Image::make('slike/temp.jpg');
                $image->filter(new Filters\ChromeFilter());
                $image->save('slike/temp1.jpg');   
            }
             else if($filterValue == "monopin")
            {
                $image = Image::make('slike/temp.jpg');
                $image->filter(new Filters\MonopinFilter());
                $image->save('slike/temp1.jpg');   
            }
             else if($filterValue == "retro")
            {
                $image = Image::make('slike/temp.jpg');
                $image->filter(new Filters\RetroFilter());
                $image->save('slike/temp1.jpg');   
            }
             else if($filterValue == "velvet")
            {
                $image = Image::make('slike/temp.jpg');
                $image->filter(new Filters\VelvetFilter());
                $image->save('slike/temp1.jpg');   
            }
             else if($filterValue == "bw")
            {
                $image = Image::make('slike/temp.jpg');
                $image->filter(new Filters\BlackWhiteFilter());
                $image->save('slike/temp1.jpg');   
            }
             else if($filterValue == "boost")
            {
                $image = Image::make('slike/temp.jpg');
                $image->filter(new Filters\BoostFilter());
                $image->save('slike/temp1.jpg');   
            }
             else if($filterValue == "dreamy")
            {
                $image = Image::make('slike/temp.jpg');
                $image->filter(new Filters\DreamyFilter());
                $image->save('slike/temp1.jpg');   
            }
            else if($filterValue == "sepia")
            {
                $image = Image::make('slike/temp.jpg');
                $image->filter(new Filters\SepiaFilter());
                $image->save('slike/temp1.jpg');   
            }
            else if($filterValue == "syncity")
            {
                $image = Image::make('slike/temp.jpg');
                $image->filter(new Filters\SynCityFilter());
                $image->save('slike/temp1.jpg');   
            }
            else{}
             return view('formUpload');   
        }
        
        if($button == 'upload')
        {
            $naslov = $_POST['naslov'];
            $type = $_POST['type'];
            $img = Image::make('slike/temp1.jpg');
            $img->resize('500,500')->save('slike/'.$naslov."-thumb.jpg");
            $img->resize('1024,1024')->save('slike/'.$naslov.'.jpg');
            $thumb='slike/'.$naslov."-thumb.jpg";
            $normal='slike/'.$naslov.'.jpg';
        
            DB::table('slike')->insert(
             array(
                'naslov' => $naslov,
                'type' => $type,
                'path_norm' => $normal,
                'path_thumb' => $thumb
            ));
            
      echo "Record inserted successfully You will be redirected in 1sec";
     header( "refresh:1;url=http://localhost/NotAnotherInstagramClone/laravel/public/galerijaAdmin  " );
      
        }
        
    }
}
