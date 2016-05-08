<?php

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
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('tel');
            $table->string('password');
            $table->string('adresse');
            $table->integer('postal');
            $table->string('city');
            $table->string('country');
            $table->string('photo');
            $table->string('socialfb')->nullable();
            $table->string('socialtt')->nullable();
            $table->string('socialig')->nullable();
            $table->string('socialgg')->nullable();
            $table->text('sectors')->nullable();
            $table->text('known')->nullable();
            $table->text('axes')->nullable();
            $table->tinyInteger('newsletter')->default(0);
            $table->tinyInteger('is_admin')->default(0);
            $table->tinyInteger('is_orga')->default(0);
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
        Schema::drop('users');
    }
}
