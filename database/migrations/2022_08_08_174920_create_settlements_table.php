<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettlementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settlements', function (Blueprint $table) {
            $table->integer('key');
            $table->string('name');
            $table->string('zone_type');
            $table->unsignedInteger('settlement_type_key');
            $table->string('zip_code');
            $table->timestamps();

            $table->foreign('settlement_type_key')->references('key')->on('settlement_types');
            $table->foreign('zip_code')->references('zip_code')->on('zip_codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settlements');
    }
}
