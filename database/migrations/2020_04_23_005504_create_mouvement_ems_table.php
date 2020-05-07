<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMouvementEmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mouvement_ems', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('embarcation_id')->unique();
            $table->foreign('embarcation_id')->references('id')->on('embarcations');
           $table->string('Date_Heur_mouvement');
           $table->string('Raison_Mouvement');
           $table->string('Nature_Mouvment');
           $table->string('Durée_Absence');
           $table->string('Autorisation');    
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
        Schema::dropIfExists('mouvement_ems');
    }
}
