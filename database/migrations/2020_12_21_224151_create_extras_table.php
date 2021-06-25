<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id');
            $table->mediumText('welcome')->nullable();
            $table->string('name1')->nullable();
            $table->string('role1')->nullable();
            $table->string('name2')->nullable();
            $table->string('role2')->nullable();
            $table->string('name3')->nullable();
            $table->string('role3')->nullable();
            $table->string('name4')->nullable();
            $table->string('role4')->nullable();
            $table->string('name5')->nullable();
            $table->string('role5')->nullable();
            $table->string('name6')->nullable();
            $table->string('role6')->nullable();
            $table->longText('fund')->nullable();
            $table->mediumText('q1')->nullable();
            $table->mediumText('q2')->nullable();
            $table->mediumText('q3')->nullable();
            $table->mediumText('q4')->nullable();
            $table->mediumText('q5')->nullable();
            $table->mediumText('q6')->nullable();

            $table->mediumText('vision')->nullable();
            $table->mediumText('mission')->nullable();
            $table->mediumText('values')->nullable();
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
        Schema::dropIfExists('extras');
    }
}
