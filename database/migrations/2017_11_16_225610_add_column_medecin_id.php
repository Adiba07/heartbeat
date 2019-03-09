<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnMedecinId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            //cle etrangere identifiant du medecin dans la table patients
            $table->integer('medecin_id')->unsigned()->after('id_patient');
            $table->foreign('medecin_id')->references('id')->on('medecins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropForeign(['medecin_id']);
            $table->dropColumn('medecin_id');
        });
    }
}
