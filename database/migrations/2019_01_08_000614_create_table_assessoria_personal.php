<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAssessoriaPersonal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessoria_personal_table', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_assessoria')->unsigned();
            $table->foreign('id_assessoria')->references('id')->on('assessoria_table')->onDelete('cascade');
            $table->integer('id_personal')->unsigned();
            $table->foreign('id_personal')->references('id')->on('personal_table')->onDelete('cascade');
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
        Schema::dropIfExists('assessoria_personal_table');
    }
}
