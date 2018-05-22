<?php
//Урок https://amegatron.ru/2014/07/poetapnaya-razrabotka-sajta-na-laravel-4-urok-5-chast-2/

/*Т.к. версия MySQL старая то в файл AppServiceProvider.php добавить:
use Illuminate\Support\Facades\Schema;
function boot(){
    Schema::defaultStringLength(191);
}
*/


//php artisan make:migration create_users_table - Создание миграции
//php artisan migrate - запуск миграции
//php artisan make:controller UsersController - Создание контроллера

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table){
            //Тип таблицы
            $table->engine = 'InnoDB';
            //Id пользователя
            $table->increments('id');
            //Внешний ключ во многие ко многим
            //$table->foreign('role_id')->references('id')->on('roles');
            //Логин
            $table->string('username')->unique();
            // Пароль. Для используемой в Laravel хэш-функции требуется не меньше 60 символов
            $table->string('password', 60);
            // E-Mail (уникальный)
            $table->string('email')->unique();
            // Активирован да/нет
            $table->boolean('isActive')->index();
            // Код активации аккаунта
            $table->string('activationCode');
            // Токен для возможности запоминания пользователя
            $table->rememberToken();
            //Времена создания и обновления записи в базе
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
        Schema::dropIfExists('users');
    }
}
