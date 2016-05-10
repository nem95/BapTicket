<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subject');
            $table->string('host');
            $table->text('content');
            $table->time('debut');
            $table->time('fin');
            $table->string('localisation');
            $table->string('adresse');
            $table->string('adresse2')->nullable();
            $table->string('city');
            $table->integer('postal');
            $table->bigInteger('places');
            $table->bigInteger('placesLeft');
            $table->date('date');
            $table->string('img');
            $table->integer('user_id')->unsigned();
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
        Schema::drop('events');
    }
}
