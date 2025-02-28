<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellContactMailModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_contact_mail_models', function (Blueprint $table) {
            $table->id();
               $table->string('name',300)->nullable();
            $table->string('city',300)->nullable();
            $table->string('email',300)->nullable();
            $table->string('contact_number',300)->nullable();
            $table->string('method_of_contact',300)->nullable();
            $table->string('time_to_call',300)->nullable();
            $table->text('comment_or_question')->nullable();
              $table->string('property_address',400)->nullable();
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
        Schema::dropIfExists('sell_contact_mail_models');
    }
}
