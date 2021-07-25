<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('reg_id')->unique()->after('id')->nullable();
            $table->text('phone_no')->after('email')->nullable();
            $table->string('dob')->after('phone_no')->nullable();
            $table->foreignId('degree_id')->constrained()->after('dob')->nullable();
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
            $table->dropcolumn('reg_id');
            $table->dropcolumn('phone_no');
            $table->dropcolumn('dob');
            $table->dropcolumn('degree_id');
        });
    }
}
