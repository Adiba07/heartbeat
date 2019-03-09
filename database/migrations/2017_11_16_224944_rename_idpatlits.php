<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameIdpatlits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patlits', function (Blueprint $table) {
            $table->renameColumn('id', 'id_patlits');
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
            $table->renameColumn('id_patlits', 'id');
        });
    }
}
