<?php

namespace NotAnotherInstagramClone\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class galleryController extends Controller
{
    public  function index()
    {
       
        return view('galerija');
    }
    
    
    
    
    public function paging($page)
    {
        $start = 0;
        $end = 15;
        $pages = $page;
//        $dsn = 'mysql:host=localhost; dbname=galerija; charset=utf8';
//        $username = 'root';
//        $password = '';
      
       // $data = DB::table('slike')->select(DB::raw('path_thumb'))->orderBy('id','DESC')->get();
       
       // $data = DB::select(DB::raw('SELECT path_thumb FROM slike ORDER BY id DESC'));
      // $data = collect($data)->map(function($x){ return (array) $x; })->toArray(); 
//            try
//            {
//                $conn = new PDO($dsn, $username, $password);
//            }
//             catch (PDOException $e)
//             {
//                 echo 'Connection failed: '.$e->getMessage();
//                 exit;
//             }
//             $sql = "SELECT path_thumb FROM slike ORDER BY id DESC";
//             $stmt = $conn->query($sql);
        
        
        
        
      /*  if($page == null || $page == 0 || $page == 1)
        {
            $start = 0; 
            $end = 15;
            
            for($start; $start<=$end; $start++)
            {
                    echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">';
                    echo    '<a class="thumbnail" href="#">';
                    echo        '<img class="img-responsive" src="'.$data[$start].'" alt="">';
                    echo    '</a>';
                    echo '</div>'; 
            }
            
        }
        else
        {
            $start = (16*$page)-16;
            $end = (16*$page)-1;
            
            for($start; $start<=$end; $start++)
            {
                    echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">';
                    echo    '<a class="thumbnail" href="#">';
                    echo        '<img class="img-responsive" src="'.$stmt[$start].'" alt="">';
                    echo    '</a>';
                    echo '</div>'; 
            }
            
            
        }
        
        */
        
        
        return view('galerija');
    }
    
}
