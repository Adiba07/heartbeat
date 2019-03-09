<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameIdColumnConslpatients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consltpatients', function (Blueprint $table) {
            $table->renameColumn('id', 'id_consltpatients');
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
            $table->renameColumn('id_consltpatients', 'id');
        });
    }
}
