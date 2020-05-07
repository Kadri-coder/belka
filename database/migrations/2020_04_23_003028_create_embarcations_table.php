<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmbarcationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embarcations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('prop_id')->unique();
            $table->foreign('prop_id')->references('id')->on('props');
            $table->string('Nom_Embarcation',50);
            $table->string('Type',50);
            $table->string('Immatriculation',50);
            $table->integer('Tonnage_brut');
            $table->integer('Longueur_hors_tout');
            $table->integer('Creux');
            $table->integer('Largeur_hors_tout');
            $table->datetime('Date_construction');
            $table->string('Type_moteur',20);
            $table->integer('Puissance_moteur');
            $table->string('Marque_Moteur');
            $table->string('Num_serie_moteur');
            $table->integer('Nombre_max_passagers');
            $table->datetime('Date_armement');
            $table->datetime('Date_pv_inspection');
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
        Schema::dropIfExists('embarcations');
    }
}
