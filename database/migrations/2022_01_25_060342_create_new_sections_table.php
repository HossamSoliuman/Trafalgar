<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_sections', function (Blueprint $table) {
            $table->id();
            $table->string('news_title',500)->nullable();
            $table->string('news_title_slug',500)->nullable();
            $table->text('news_description')->nullable();
            $table->string('news_featured_image',500)->nullable();
            $table->text('visible_status')->comment('display - 1 , not display - 0');
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
        Schema::dropIfExists('new_sections');
    }
}
