<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('category');
            $table->longText('description')->nullable();
            $table->date('startDate');
            $table->date('endDate');
            $table->string('venue');
            $table->integer('status')->default(1);
            $table->bigInteger('expectedParticipants');
            $table->bigInteger('totalParticipants')->default(50);
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
        Schema::dropIfExists('events');
    }
}
