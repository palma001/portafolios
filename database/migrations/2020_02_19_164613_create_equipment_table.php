<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('user_created_id');
            $table->unsignedBigInteger('user_updated_id')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_created_id')->references('id')->on('users');
            $table->foreign('user_updated_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment');
    }
}
