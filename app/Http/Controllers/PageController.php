<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;

class PageController extends Controller{

    public function getIndex()
    {
        //  $session_key    =   rand(000000,999999);
        //  Session::put('mykey_'.$session_key,$session_key);
        //  $mykey          =   Session::get('mykey_'.$session_key);
        //  var_dump (count(session()->all()));
        //  for ($i =1; $i <= 10;)
        //  {
        //     $session_key    =   rand(000000,999999);
        //     Session::put('mykey_'.$session_key,$session_key);
        //     $mykey          =   Session::get('mykey_'.$session_key);
        //      echo "<pre>";
        //      print_r(session()->all());
        //      echo "</pre>";

        //      //sleep(10);
        //      $i++;

        //  }
        return view('page.index',['title' => 'My Page']);
    }
    
}

?>