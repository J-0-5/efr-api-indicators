<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsdaGrainPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usda_grain_price', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('metric_id')->nullable();
            $table->foreign('metric_id')->references('id')->on('metrics');
            $table->string('value');
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
        Schema::dropIfExists('usda_grain_price');
    }
}
