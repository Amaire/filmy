<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('movies', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->double('price');
            $table->rememberToken();
            $table->integer('id_genre')->unsigned();

            $table->foreign('id_genre')
                    ->references('id')
                    ->on('genres')
                    ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('actor_movie', function(Blueprint $table) {
            $table->integer('id_movie')->unsigned()->index();
            $table->foreign('id_movie')->references('id')->on('movies')->onDelete('cascade');

            $table->integer('id_actor')->unsigned()->index();
            $table->foreign('id_actor')->references('id')->on('actors')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('actor_movie');
        Schema::dropIfExists('movies');
    }

}
