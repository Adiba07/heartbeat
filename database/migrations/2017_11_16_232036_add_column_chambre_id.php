<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnChambreId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lits', function (Blueprint $table) {
            //cle etrangere identifiant du chambre dans la table lits
            $table->integer('chambre_id')->unsigned()->after('id_lit');
            $table->foreign('chambre_id')->references('id_chambre')->on('chambres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lits', function (Blueprint $table) {
            $table->dropForeign(['chambre_id']);
            $table->dropColumn('chambre_id');
        });
    }
}
