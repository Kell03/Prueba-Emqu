<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\encuesta;
use Validator, Str, Config, Image;
class encuestaController extends Controller
{

 public function __construct(){

       $this->middleware('auth');

    }


    public function getencuesta(Request $request){


        return view('encuesta.index');
    }


        public function postencuesta(Request $request){

         
       $rules = [

        'nombre'=>'required',
       'apellido'=>'required',
       'email'=>'required|email|unique:encuesta',
       'edad'=>'required',
       'sexo'=>'required',
       'time_facebook'=>'required',
       'time_instagram'=>'required',
       'time_whatsapp'=>'required',
       'time_twitter'=>'required',
       'time_tiktok'=>'required',
       'favorite_red' => 'required'




       ];


 $validator = Validator::make($request->all(), $rules);
   if($validator->fails()):
   return back()->withInput()->withErrors($validator)->with('mensaje', 'Ha ocurrido un error')->with('typealert', 'danger');
   else:
   $encuesta = new encuesta;
   $encuesta->nombre = $request->get('nombre');
   $encuesta->apellido = $request->get('apellido');
   $encuesta->email = $request->get('email');
   $encuesta->edad = $request->get('edad');
   $encuesta->time_ing = $request->get('time_instagram'); 
   $encuesta->time_fc = $request->get('time_facebook'); 
   $encuesta->time_ws = $request->get('time_whatsapp'); 
   $encuesta->time_tw = $request->get('time_twitter'); 
   $encuesta->time_tk = $request->get('time_tiktok'); 
   $encuesta->red_favorita = $request->get('favorite_red'); 
   $encuesta->save();
   
   return redirect('/')->with('message', 'Gracias por participar en nuestra encuesta')->with('typealert', 'success');
   endif;


       
    }
}
