<?php

namespace App\Controllers;

class Auth extends BaseController
{
    
   public function __construct() {
   }

public function register(){


    $dta=array('title'=>'Register',
);
return view('v_register',$data);
}


}
