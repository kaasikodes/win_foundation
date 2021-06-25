<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePpvolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppvolunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id');
            $table->boolean('willingnessToProvide');
            $table->boolean('areaCoordinator');
            $table->boolean('stateCoordinator');
            $table->boolean('zonalCoordinator');
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
        Schema::dropIfExists('ppvolunteers');
    }
}
