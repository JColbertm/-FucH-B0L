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
        Schema::create('entreandor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_en');
            $table->string('correo_en')->unique();
            $table->timestamp('correo_en_verified_at')->nullable();
            $table->string('pass_en');
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
