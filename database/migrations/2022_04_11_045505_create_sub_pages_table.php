<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_pages', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('page_id');
              $table->string('subpage_name',100)->unique();
              $table->string('subpage_feature_image',300)->nullable();
              $table->text('subpage_description')->nullable();
            $table->string('subpage_route_url',300)->nullable();
              $table->integer('subpage_status')->default(1)->comment('1 - active , 0 - inactive');
               $table->foreign('page_id')->references('id')->on('pages');
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
        Schema::dropIfExists('sub_pages');
    }
}
