<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSortingAlgorithmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorting_algorithms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('best_time_complexity');
            $table->string('average_time_complexity');
            $table->string('worst_time_complexity');
            $table->string('space_complexity');
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
        Schema::dropIfExists('sorting_algorithms');
    }
}
