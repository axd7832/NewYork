<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();

            // Company CEO 
            $table->integer('ceo_id')->unsigned()->nullable();
            $table->foreign('ceo_id')->references('id')->on('users')->onDelete('cascade');

            // VC Director
            $table->integer('director_id')->unsigned()->nullable();
            $table->foreign('director_id')->references('id')->on('users')->onDelete('cascade');

            // VC Coach
            $table->integer('coach_id')->unsigned()->nullable();
            $table->foreign('coach_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
