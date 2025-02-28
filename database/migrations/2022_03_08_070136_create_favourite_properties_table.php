<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavouritePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourite_properties', function (Blueprint $table) {
            $table->id();
            $table->string('api_property_id',300)->nullable();
            //$table->string('user_id',300)->nullable();
             $table->integer('property_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            // $table->foreign('property_id')->references('id')->on('entegral_api_data');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favourite_properties');
    }
}
