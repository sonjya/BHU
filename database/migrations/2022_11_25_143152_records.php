<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(' records', function (Blueprint $table) {
            $table->integer('reportID')->autoIncrement();
            $table->integer('categoryID');
            $table->string('name');
            $table->integer('age');
            $table->string('sex');
            $table->string('diagnosis');
            $table->string('ICD10');
            $table->string('address');
            $table->string('physician');
            $table->string('month');
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
        Schema::dropIfExists('records');
    }
};
