<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersToAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attendances', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('course_id')->constrained();
            $table->decimal('total_hours')->default('0.00');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendances', function (Blueprint $table) {
            $table->dropcolumn('user_id'); 
            $table->dropcolumn('course_id'); 
            $table->dropcolumn('total_hours'); 
            $table->dropcolumn('status');
        });
    }
}
