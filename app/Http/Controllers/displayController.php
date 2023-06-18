<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Session;
use DB;

class displayController extends BaseController
{
    

     


      public function insert(Request $req)
      {
            
        $username = $req->input('username');
        $password = $req->input('password');

           $data = array('username'=>$username,'password'=>$password);
            

        $check = DB::Table('user')->where(['username'=>$username,'password'=>$password])->get();

        if(count($check) <> 1)
         {
          DB::table('user')->insert($data);
    
          Session::flash('success','Your username and password created successfully');
          return view('insertForm'); 
        }
        else
        {
           Session::flash('unsuccess','Your username and password is Already Exist');
          return view('insertForm'); 
        }


            
      }


    
}





