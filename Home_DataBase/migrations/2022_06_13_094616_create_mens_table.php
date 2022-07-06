<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mens', function (Blueprint $table) {
            $table->id();
            $table->text('image_path');
            $table->boolean('flag');
            $table->string('discount');
            $table->string('name');
            $table->string('discount_price');
            $table->string('price');
            $table->integer('height');
            $table->integer('width');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mens');
    }
}
