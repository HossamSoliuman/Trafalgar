<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->integer('agent_id')->nullable();
            $table->string('title',300)->nullable();
            $table->string('first_name',300)->nullable();
            $table->string('last_name',300)->nullable();
            $table->string('photo_url',300)->nullable();
            $table->string('role',200)->nullable();
            $table->string('mobile_number',300)->nullable();
            $table->string('email',300)->nullable();
            $table->text('job_title')->nullable();
            $table->string('birthday',300)->nullable();
            $table->string('added',300)->nullable();
            $table->string('updated',300)->nullable();
             $table->string('api_name',300)->nullable();
            $table->integer('is_agent_new')->default(0)->comment('0 - old agent , 1 - new agent');
            $table->string('api_city_key',300)->nullable();
             $table->text('profile')->nullable();
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
        Schema::dropIfExists('agents');
    }
}
