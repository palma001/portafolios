<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentProfessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_professions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profession_id');
            $table->unsignedBigInteger('equipment_id');
            $table->unsignedBigInteger('user_created_id');
            $table->unsignedBigInteger('user_updated_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('profession_id')->references('id')->on('professions');
            $table->foreign('equipment_id')->references('id')->on('equipment');
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
        Schema::dropIfExists('equipment_professions');
    }
}
