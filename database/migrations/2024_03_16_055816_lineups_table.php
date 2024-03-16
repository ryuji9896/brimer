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
        Schema::create('lineups', function (Blueprint $table) {
            $table->id();
            $table->integer('map_id');
            $table->string('site_name');
            $table->integer('impact_id');
            $table->string('stand_posi_txt');
            $table->string('stand_posi_img_path');
            $table->string('corsor_txt');
            $table->string('corsor_img_path');
            $table->string('time');
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
        Schema::dropIfExists('lineups');
    }
};
