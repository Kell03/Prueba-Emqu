<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta', function (Blueprint $table) {
            $table->id();
             $table->string('nombre');
            $table->string('email')->unique()->nullable();
            $table->string('apellido');
            $table->enum('sexo',['M','F']);
            $table->enum('edad',['18-25','26-33','34-40','40+']);
            $table->string('red_favorita');
            $table->integer('time_fc'); //tiempo en facebook
            $table->integer('time_ing'); //tiempo en instagram
            $table->integer('time_tk');//tiempo en tiktok
            $table->integer('time_ws');//tiempo en whatsapp
            $table->integer('time_tw');//tiempo en twitter
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuesta');
    }
}
