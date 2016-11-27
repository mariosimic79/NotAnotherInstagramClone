<?php

namespace NotAnotherInstagramClone\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    
    public function submitLogin()
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        
        $users = DB::select('select * from korisnici');
        
        
        foreach($users as $element)
        {
             if($user==$element->user && $pass==$element->pass)
                {
                    echo 'You are logged in. You will be redirected in 5sec';
                    header( "refresh:5;url=http://localhost/NotAnotherInstagramClone/laravel/public/galerijaAdmin" );
                }
            else
                {
                    echo "Wrong username or password! Try again;";
                     header( "refresh:5;url=http://localhost/NotAnotherInstagramClone/laravel/public/login" );
                }
        
        }
    }
}
