<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;

class PageController extends Controller{

    public function getIndex()
    {
        // $session_key    =   rand(000000,999999);
        // Session::put('mykey_'.$session_key,$session_key);
        // $mykey          =   Session::get('mykey_'.$session_key);
        // var_dump (session()->all());
        return view('page.index',['title' => 'My Page']);
    }
    
}

?>