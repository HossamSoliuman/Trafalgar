<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsLetterSignUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_letter_sign_ups', function (Blueprint $table) {
            $table->id();
              $table->string('user_name',400)->nullable();
            $table->string('user_email',300)->nullable();
            $table->integer('is_active')->default(1)->comment('1 - subscribed , 0 - not subscribed');
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
        Schema::dropIfExists('news_letter_sign_ups');
    }
}
