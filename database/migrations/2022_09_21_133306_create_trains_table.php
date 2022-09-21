<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('from');
            $table->string('to');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code');
            $table->tinyInteger('coach_nr', false, true);
            $table->boolean('is_deleted')->default(false);
            $table->boolean('in_time')->default(true);
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
        Schema::dropIfExists('trains');
    }
}
