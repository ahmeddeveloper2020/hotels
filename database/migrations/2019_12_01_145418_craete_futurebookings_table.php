<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CraeteFuturebookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('futurebookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('visiter_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('duration');
            // $table->integer('status');
            $table->integer('room_id');
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
        Schema::dropIfExists('futurebookings');
    }
}
