<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnùmedecinId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consultations', function (Blueprint $table) {
            //cle etrangere identifiant du medecin dans la table consultation
            $table->integer('medecin_id')->unsigned()->after('id_consultation');
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
        Schema::table('consultations', function (Blueprint $table) {
            $table->dropForeign(['medecin_id']);
            $table->dropColumn('medecin_id');
        });
    }
}
