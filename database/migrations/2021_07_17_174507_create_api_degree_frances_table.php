<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiDegreeFrancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_degree_frances', function (Blueprint $table) {
            $table->id();
            $table->int('years');
            $table->string('months');
            $table->float('max_degree');
            $table->float('min_degree');
            $table->float('average_degree');
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
        Schema::dropIfExists('api_degree_frances');
    }
}
