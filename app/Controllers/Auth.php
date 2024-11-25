<?php

namespace App\Controllers;

use App\Models\Model_Auth;



class Auth extends BaseController
{
    
   public function __construct() {
    helper('form');
    $this->Model_Auth=new Model_Auth();

   }

public function register(){


    $data=array('title'=>'Register',
);
return view('v_register',$data);
}
public function save_register()
{
    if ($this->validate([
          'name_user'=>[
            'label'=> 'username',
            'rules'=> 'required',
            'errors'=>[
                'required'=> 'All accounts must have {field} provided'
            ]],
            'email'=>[
            'label'=> 'Email',
            'rules'=> 'required',
            'errors'=>[
                'required'=> 'All accounts must have {field} provided'
            ]],
            'password'=>[
            'label'=> 'Password',
            'rules'=> 'required',
            'errors'=>[
                'required'=> 'All accounts must have {field} provided'
            ]],
            'repassword'=>[
            'label'=> 'Retype Password',
            'rules'=> 'required|matches[password]',
            'errors'=>[
                'required'=> 'All accounts must have {field} provided',
                'matches'=> ' {field} different password !!!!'

            ]]
            
          ]
    )) {
          $data=array(
            'name_user'=>$this->request->getPost('name_user'),
            'email'=>$this->request->getPost('email'),
            'password'=>$this->request->getPost('password'),
             'level'=>3
          );
          $this->Model_Auth->save_register($data);
          session()->setFlashdata('message','register reussit !!!');
          return redirect()->to(base_url('auth/register'));



    }else{
        session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
        return redirect()->to(base_url('auth/register'));
    }

}

}
