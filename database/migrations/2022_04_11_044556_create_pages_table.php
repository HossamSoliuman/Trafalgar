<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
             $table->string('page_name',100)->unique();
              $table->string('page_feature_image',300)->nullable();
              $table->text('description')->nullable();
            $table->string('page_url_name',300)->unique();
             $table->string('page_route_url',300)->nullable();
              $table->integer('page_status')->default(1)->comment('1 - active , 0 - inactive');
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
        Schema::dropIfExists('pages');
    }
}
