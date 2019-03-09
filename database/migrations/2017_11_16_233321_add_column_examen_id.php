<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnExamenId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('examtypes', function (Blueprint $table) {
            //cle etrangere identifiant d'examen dans la table examens-typese_examens
            $table->integer('examen_id')->unsigned()->after('id_examtypes');
            $table->foreign('examen_id')->references('id_examen')->on('examens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('examtypes', function (Blueprint $table) {
            $table->dropForeign(['examen_id']);
            $table->dropColumn('examen_id');
        });
    }
}
