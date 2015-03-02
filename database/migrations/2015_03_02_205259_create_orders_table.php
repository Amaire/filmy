<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('orders', function(Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('status');
            $table->integer('id_user')->unsigned();

            $table->foreign('id_user')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('movie_order', function(Blueprint $table) {
            $table->integer('id_movie')->unsigned()->index();
            $table->foreign('id_movie')->references('id')->on('movies')->onDelete('cascade');

            $table->integer('id_order')->unsigned()->index();
            $table->foreign('id_order')->references('id')->on('orders')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('movie_order');
        Schema::dropIfExists('orders');
    }

}
