<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30);
            $table->string('lastname',60);
            $table->string('sex',10);
            $table->string('cep',15);
            $table->string('bairro',40);
            $table->string('city',40);
            $table->string('uf',3);
            $table->string('address',80);
            $table->string('number',20);
            $table->date('datebirth');
            $table->string('cell',16)->nullable();
            $table->string('cpf',14)->unique();;
            $table->string('rg',20);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image',250)->nullable();
            $table->string('type',2)->nullable();
            $table->rememberToken();
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
