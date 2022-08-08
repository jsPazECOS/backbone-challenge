<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zip_codes', function (Blueprint $table) {

            $table->string('zip_code');
            $table->string('locality');
            $table->unsignedInteger('municipality_key');
            $table->unsignedInteger('federal_entity_key');
            $table->timestamps();

            $table->foreign('municipality_key')->references('key')->on('municipalities');
            $table->foreign('federal_entity_key')->references('key')->on('federal_entities');

            $table->primary(['zip_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zip_codes');
    }
}
