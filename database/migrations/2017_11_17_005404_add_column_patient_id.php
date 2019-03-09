<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPatientId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patlits', function (Blueprint $table) {
            //cle etrangere identifiant du patient dans la table patients-lits
            $table->integer('patients_id')->unsigned()->after('id_patlits');
            $table->foreign('patients_id')->references('id_patient')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patlits', function (Blueprint $table) {
            $table->dropForeign(['patients_id']);
            $table->dropColumn('patients_id');
        });
    }
}
