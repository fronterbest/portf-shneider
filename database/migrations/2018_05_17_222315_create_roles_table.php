<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            //Тип таблицы
            $table->engine = 'InnoDB';
            //Id пользователя
            $table->increments('id');
            //Логин
            $table->string('role')->unique();
            //Времена создания и обновления записи в базе
            $table->timestamps();
        });

        // Добавляем сразу в базу роли
        $date_today = date("y.m.d"); 
        $time_today = date("H:i:s"); 

        DB::table('roles')->insert(array('role' => 'admin', 'created_at' => $date_today." ".$time_today, 'updated_at' => $date_today." ".$time_today));
        DB::table('roles')->insert(array('role' => 'manager', 'created_at' => $date_today." ".$time_today, 'updated_at' => $date_today." ".$time_today));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
