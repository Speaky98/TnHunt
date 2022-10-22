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
        Schema::create('chiens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('breed');
            $table->string('image');
            $table->string('description');
            $table->foreignId('animal_id')->constrained()->onUpdate('restrict')->onUpdate('restrict');
            $table->timestamps();
            //$table->unsignedBigInteger('animal_id');
            //$table->foreign('animal_id')->references('id')->on('animals')->onUpdate('restrict')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chien');
    }
};
