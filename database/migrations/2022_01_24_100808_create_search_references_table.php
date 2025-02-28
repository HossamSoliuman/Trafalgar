<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_references', function (Blueprint $table) {
            $table->id();
             $table->string('search_name',500)->nullable();
               $table->string('search_type',500)->nullable();
               $table->string('api_city_key',500)->nullable();
               $table->string('api_type_name',500)->nullable();
               
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
        Schema::dropIfExists('search_references');
    }
}
