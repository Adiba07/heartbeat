<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnLitId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patlits', function (Blueprint $table) {
            $table->integer('lit_id')->unsigned()->after('patients_id');
            $table->foreign('lit_id')->references('id_lit')->on('lits');
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
            $table->dropForeign(['lit_id']);
            $table->dropColumn('lit_id');
        });
    }
}
