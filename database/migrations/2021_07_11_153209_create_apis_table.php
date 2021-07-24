<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_degree_france', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('year', 4);
            $table->string('months', 255);
            $table->integer('max_degree', 11);
            $table->integer('min_degree', 11);
            $table->integer('average_degree', 11);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apis');
    }
}
