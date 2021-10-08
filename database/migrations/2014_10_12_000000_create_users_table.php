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
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('ap',15);
            $table->string('am',15);
            $table->string('nombre',15);
            $table->char('sexo');
            $table->date('fecha_nacimiento');
            $table->string('email')->unique();
            $table->timestamps()('email_verificacion')->nullable(); //verificamos el correo
            



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
