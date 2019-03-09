<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfirmiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infirmiers', function (Blueprint $table) {
            $table->increments('id_infirmier');
            $table->string('prenom',20);
            $table->string('nom',20);
            $table->string('grade',20);
            $table->string('specialite',20);
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
        Schema::dropIfExists('infirmiers');
    }
}
