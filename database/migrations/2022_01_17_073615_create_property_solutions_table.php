<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertySolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_solutions', function (Blueprint $table) {
            $table->id();
            $table->string('title_name',500)->nullable();
            $table->text('description')->nullable();
             $table->string('image_link',350)->nullable();
             $table->string('url_link',350)->nullable();
              $table->tinyInteger('visible_status')->comment('1 - display , 0 - not display')->default(0);
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
        Schema::dropIfExists('property_solutions');
    }
}
