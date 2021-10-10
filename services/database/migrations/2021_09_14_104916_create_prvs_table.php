<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prvs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ville');
            $table->string('phone');
            $table->string('exp');
            $table->unsignedBigInteger('svr_id');
            $table->foreign('svr_id')->references('id')->on('services__categories')->onDelete('cascade');
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
        Schema::dropIfExists('prvs');
    }
}
