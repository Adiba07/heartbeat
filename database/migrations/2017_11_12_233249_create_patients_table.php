<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id_patient');
            $table->string('nsec',20);
            $table->string('prenom',20);
            $table->string('nom',20);
            $table->date('date_naissance');
            $table->string('groupe_sanguin',10);
            $table->string('sexe',10);
            $table->integer('poids');
            $table->integer('taille');
            $table->date('date_prochain_rdv');
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
        Schema::dropIfExists('patients');
    }
}
