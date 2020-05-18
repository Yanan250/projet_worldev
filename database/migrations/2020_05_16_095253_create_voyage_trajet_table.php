<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoyageTrajetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyage_trajet', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('voyage_id');
            $table->unsignedBigInteger('trajet_id');
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
        Schema::dropIfExists('voyage_trajet');
    }
}
