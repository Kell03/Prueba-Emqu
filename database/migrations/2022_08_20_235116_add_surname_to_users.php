<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSurnameToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname');
        });
    }

    /**
     * Reverse the migrations. $table->string('nombre');
            $table->string('email')->unique()->nullable();
            $table->string('apellido');
            $table->enum('sexo',['M','F']);
            $table->enum('edad',['18-25','26-33','34-40','40+']);
            $table->string('red_favorita');
            $table->integer('time_fc');
            $table->integer('time_ing');
            $table->integer('time_tk');
            $table->integer('time_ws');
            $table->integer('time_tw');
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
