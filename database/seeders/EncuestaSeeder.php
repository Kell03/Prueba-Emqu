<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EncuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('encuesta')->insert([
            'nombre' => 'Kelfran',
            'apellido' => 'Aponte',
            'email'=>'Apontekelfran@gmail.com',
             'edad' => '18-25',
             'sexo'=>'M',
             'red_favorita'=>'Facebook',
             'time_fc'=>'4',
             'time_ws'=>'3',
             'time_ing'=>'7',
             'time_tw'=>'1',
             'time_tk'=>'10'
        ]);


                  DB::table('encuesta')->insert([
            'nombre' => 'Juan ',
            'apellido' => 'Pérez',
            'email'=>'JuanPérez@gmail.com',
             'edad' => '34-40',
             'sexo'=>'M',
             'red_favorita'=>'Twitter',
             'time_fc'=>'3',
             'time_ws'=>'8',
             'time_ing'=>'5',
             'time_tw'=>'9',
             'time_tk'=>'0'
        ]);


         DB::table('encuesta')->insert([
            'nombre' => 'María',
            'apellido' => 'Soto',
            'email'=>'MariaSoto@gmail.com',
             'edad' => '26-33',
             'sexo'=>'F',
             'red_favorita'=>'Instagram',
             'time_fc'=>'10',
             'time_ws'=>'5',
             'time_ing'=>'5',
             'time_tw'=>'0',
             'time_tk'=>'2'
        ]);


        DB::table('encuesta')->insert([
            'nombre' => 'Natalia',
            'apellido' => 'Fernández',
            'email'=>'NataliaFernández@gmail.com',
             'edad' => '40+',
             'sexo'=>'F',
             'red_favorita'=>'Whatsapp',
             'time_fc'=>'2',
             'time_ws'=>'8',
             'time_ing'=>'7',
             'time_tw'=>'4',
             'time_tk'=>'2'
        ]);


         DB::table('encuesta')->insert([
            'nombre' => 'Martín',
            'apellido' => 'Acosta',
            'email'=>'MartínAcosta@gmail.com',
             'edad' => '40+',
             'sexo'=>'M',
             'red_favorita'=>'Whatsapp',
             'time_fc'=>'5',
             'time_ws'=>'7',
             'time_ing'=>'3',
             'time_tw'=>'1',
             'time_tk'=>'1'
        ]);


        DB::table('encuesta')->insert([
            'nombre' => 'Sebastián',
            'apellido' => 'Yepes',
            'email'=>'SebastiánYepes@gmail.com',
             'edad' => '18-25',
             'sexo'=>'M',
             'red_favorita'=>'TikTok',
             'time_fc'=>'9',
             'time_ws'=>'5',
             'time_ing'=>'1',
             'time_tw'=>'7',
             'time_tk'=>'3'
        ]);


        DB::table('encuesta')->insert([
            'nombre' => 'Sofía',
            'apellido' => 'Arango',
            'email'=>'SofíaArango@gmail.com',
             'edad' => '34-40',
             'sexo'=>'F',
             'red_favorita'=>'Facebook',
             'time_fc'=>'8',
             'time_ws'=>'7',
             'time_ing'=>'5',
             'time_tw'=>'2',
             'time_tk'=>'3'
        ]);


        DB::table('encuesta')->insert([
            'nombre' => 'Omar',
            'apellido' => 'Rincón',
            'email'=>'MatíasRincón@gmail.com',
             'edad' => '26-33',
             'sexo'=>'M',
             'red_favorita'=>'Twitter',
             'time_fc'=>'2',
             'time_ws'=>'4',
             'time_ing'=>'6',
             'time_tw'=>'3',
             'time_tk'=>'2'
        ]);

    DB::table('encuesta')->insert([
            'nombre' => 'Mónica',
            'apellido' => 'Mendoza',
            'email'=>'MonicaMendoza@gmail.com',
             'edad' => '18-25',
             'sexo'=>'F',
             'red_favorita'=>'Instagram',
             'time_fc'=>'6',
             'time_ws'=>'7',
             'time_ing'=>'5',
             'time_tw'=>'3',
             'time_tk'=>'2'
        ]);

        DB::table('encuesta')->insert([
            'nombre' => 'Margarita',
            'apellido' => 'Muñoz',
            'email'=>'MargaritaMuñoz@gmail.com',
             'edad' => '40+',
             'sexo'=>'F',
             'red_favorita'=>'Twitter',
             'time_fc'=>'0',
             'time_ws'=>'3',
             'time_ing'=>'1',
             'time_tw'=>'5',
             'time_tk'=>'10'
        ]);

    }
}
