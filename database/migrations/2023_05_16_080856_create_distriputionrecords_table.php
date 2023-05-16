<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distriputionrecords', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('recipientID')->nullable();
            $table->dateTime('recrptionDate')->nullable();
            $table->string('state', 12)->nullable();
            $table->string('distriputionPointName', 50)->nullable();
            $table->string('distriputerName', 50)->nullable();
            $table->string('ListName', 50)->nullable();
            $table->string('packageName', 10)->nullable();
            $table->integer('packageID')->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distriputionrecords');
    }
};