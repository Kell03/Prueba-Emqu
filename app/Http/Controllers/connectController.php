<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\TestMail;
use Validator, Hash, Auth, Mail;

class connectController extends Controller
{
    

    public function getregister()
    {
        return view('login.register_create');
    }

    public function postregister(Request $request){


        $rules = [
      

       'Nombre'=>'required',
       'Apellido'=>'required',
       'email'=>'required|email|unique:users',
       'password'=>'required|min:8',
       'confirm' => 'required|same:password'


];

   $validator = Validator::make($request->all(), $rules);
   if($validator->fails()):
   return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger');
   else:
   $user = new user;
   $user->name = $request->get('Nombre');
   $user->surname = $request->get('Apellido');
   $user->email = $request->get('email'); 
   $user->password = Hash::make($request->get('password'));
   $user->save();
   
   return redirect('/')->with('message', 'Datos registrados correctamente')->with('typealert', 'success');
   endif;



    }

    function getlogin(Request $request){


          return view('login.login');
    }

    function postlogin(Request $request){


       


  $rules = [


        'email'=>'required|email',
        'password'=>'required|min:8'



       ];


       $validator = Validator::make($request->all() ,$rules);
   if($validator->fails()):

   return back()->withErrors($validator);

   else:
   if(Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])):

    
    return redirect('/');

    else:
        return back()->withErrors($validator);

    endif;
   endif;
    }



     public function logout()
    {

        
            Auth::logout();
        return view('login.login');
    }
}
