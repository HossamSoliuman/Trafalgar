<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntegralPropertyImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entegral_property_images', function (Blueprint $table) {
            $table->id();
            //  $table->unsignedBigInteger('property_id');
                $table->string('url_thumb',350)->nullable();
                 $table->string('url_large',350)->nullable();
                  $table->text('property_photo_description')->nullable();
            $table->timestamps();
            //  $table->foreign('property_id')->references('id')->on('entegral_api_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entegral_property_images');
    }
}
