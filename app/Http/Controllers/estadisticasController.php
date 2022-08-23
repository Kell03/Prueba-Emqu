<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\encuesta;
use App\Models\User;

use DB;

use Validator, Str, Config, Image;

class estadisticasController extends Controller
{

    public function __construct(){

       $this->middleware('auth');
       //$this->middleware('Admin');

    }
    

    function getestadisticas(Request $request){
           

    $total_encuestas = encuesta::select('*')->count();

    $facebook = encuesta::select('*')->where('red_favorita', 'Facebook')->count();
    $instagram = encuesta::select('*')->where('red_favorita', 'Instagram')->count();
    $tiktok = encuesta::select('*')->where('red_favorita', 'Tiktok')->count();
    $twitter = encuesta::select('*')->where('red_favorita', 'Twitter')->count();
    $whatsapp = encuesta::select('*')->where('red_favorita', 'Whatsapp')->count();

    $sum_fc = encuesta::select('*')->sum('time_fc');
    $prom_fc = $sum_fc / $total_encuestas;

    $sum_ing = encuesta::select('*')->sum('time_ing');
    $prom_ing = $sum_ing / $total_encuestas;

    $sum_ws = encuesta::select('*')->sum('time_ws');
    $prom_ws = $sum_ws / $total_encuestas;

    $sum_tw = encuesta::select('*')->sum('time_tw');
    $prom_tw = $sum_tw / $total_encuestas;

    $sum_tk = encuesta::select('*')->sum('time_tk');
    $prom_tk = $sum_tk / $total_encuestas;

    
    $edad_25 = encuesta::select('red_favorita', DB::raw('COUNT(encuesta.edad) as rango'), 'edad')->where('edad', '18-25')->groupBy('red_favorita', 'edad')->orderby('rango', 'desc')->first();

    $edad_33 = encuesta::select('red_favorita', DB::raw('COUNT(encuesta.edad) as rango'), 'edad')->where('edad', '26-33')->groupBy('red_favorita', 'edad')->orderby('rango', 'desc')->first();

    $edad_40 = encuesta::select('red_favorita', DB::raw('COUNT(encuesta.edad) as rango'), 'edad')->where('edad', '34-40')->groupBy('red_favorita', 'edad')->orderby('rango', 'desc')->first();

    $edad_50 = encuesta::select('red_favorita', DB::raw('COUNT(encuesta.edad) as rango'), 'edad')->where('edad', '40+')->groupBy('red_favorita', 'edad')->orderby('rango', 'desc')->first();




    $encuestas = encuesta::all();


        return view('estadisticas.index', compact('total_encuestas', 'facebook', 'instagram', 'tiktok', 'twitter', 'whatsapp','prom_fc', 'prom_ing', 'prom_ws', 'prom_tw', 'prom_tk', 'edad_25', 'edad_33', 'edad_40', 'edad_50'));
    }
}
