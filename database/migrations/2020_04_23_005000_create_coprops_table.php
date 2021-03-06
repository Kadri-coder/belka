<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coprops', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('prop_id')->unique();
            $table->foreign('prop_id')->references('id')->on('props');
            $table->string('Nom');
            $table->string('Prénom');
          $table->datetime('Date_Naissance');
          $table->string('Lieu_Naissance');
          $table->string('Adresse');
          $table->string('Téléphone');
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
        Schema::dropIfExists('coprops');
    }
}
