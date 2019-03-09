<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnConsultationId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consltpatients', function (Blueprint $table) {
            //cle etrangere identifiant du consultation dans la table consultations-patients
            $table->integer('consultations_id')->unsigned()->after('id_consltpatients');
            $table->foreign('consultations_id')->references('id_consultation')->on('consultations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consltpatients', function (Blueprint $table) {
            $table->dropForeign(['consultations_id']);
            $table->dropColumn('consultations_id');
        });
    }
}
