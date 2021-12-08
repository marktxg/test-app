<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //crea la tabla user
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //especifica las columnas de la base de datos
            $table->id();//propiedades: integer, unsigned, increment
            $table->string('name');//propiedad varchar
            $table->string('email')->unique(); //el registro sea único, lo que se agrega no se repite en la bd
            $table->timestamp('email_verified_at')->nullable();//verificación de correo electrónico, se almacena la fecha en la que se registras
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //borra la tabla user
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
