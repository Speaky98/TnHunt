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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('category');
            $table->float('price_unit');
            $table->string('image')->nullable();
            $table->boolean('limited')->default(false);
            $table->boolean('active_for_sale')->default(true);
            $table->unsignedBigInteger('rayon_id');
            $table->timestamps();
            $table->foreign('rayon_id')->references('id')->on('rayons')->onUpdate('restrict')->onDelete('restrict');
            $table->float('total_rate')->default(0);
            $table->integer('user_rate')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
