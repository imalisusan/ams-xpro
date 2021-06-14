<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id')->constrained();
            $table->tinyInteger('totalhours')->default('0');
            $table->tinyInteger('absentclasses')->default('0');
            $table->tinyInteger('absenthours')->default('0');
            $table->tinyInteger('percentabsent')->default('0');
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
        Schema::dropIfExists('attendances');
    }

}
