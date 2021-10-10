<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ville');
            $table->string('phone');
            $table->string('service');
            $table->string('image');
            $table->string('simage');
            $table->string('exp');
            $table->timestamps();
        });

        DB::statement(
            'ALTER TABLE jobs ADD FULLTEXT fulltext_index(ville, service)'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
