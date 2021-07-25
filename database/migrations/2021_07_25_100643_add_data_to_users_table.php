<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('high_school')->nullable();
            $table->string('primary_school')->nullable();
            $table->text('address')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('fathers_occupation')->nullable();
            $table->string('fathers_phone_number')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('mothers_occupation')->nullable();
            $table->string('mothers_phone_number')->nullable();
            $table->string('guardians_name')->nullable();
            $table->string('guardians_occupation')->nullable();
            $table->string('guardians_phone_number')->nullable();
            $table->string('residence')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropcolumn('degree_id');
            $table->dropcolumn('gender');
            $table->dropcolumn('religion');
            $table->dropcolumn('high_school');
            $table->dropcolumn('primary_school');
            $table->dropcolumn('address');
            $table->dropcolumn('fathers_name');
            $table->dropcolumn('fathers_occupation');
            $table->dropcolumn('fathers_phone_number');
            $table->dropcolumn('mothers_name');
            $table->dropcolumn('mothers_occupation');
            $table->dropcolumn('mothers_phone_number');
            $table->dropcolumn('guardians_name');
            $table->dropcolumn('guardians_occupation');
            $table->dropcolumn('guardians_phone_number');
            $table->dropcolumn('residence');
        });
    }
}
