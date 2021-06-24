<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeestatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_statements', function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id');
            $table->dateTime('date');
            $table->string('document_number')->nullable();
            $table->string('document_type')->nullable();
            $table->integer('amount');
            $table->string('type');
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
        Schema::dropIfExists('fee_statements');
    }
}
