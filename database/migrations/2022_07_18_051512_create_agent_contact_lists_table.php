<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentContactListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_contact_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name',300)->nullable();
            $table->string('email',300)->nullable();
            $table->string('phone_number',100)->nullable();
            $table->text('message')->nullable();
            $table->integer('agent_id')->default(0);
             $table->integer('property_id')->default(0);
              $table->integer('contact_to')->comment('1-> contact to agent , 2 -> contact to agent for property detail page');
               $table->string('arrange_viewing',200)->nullable();
            $table->string('contact_date',250)->nullable();
            $table->string('contact_time',200)->nullable();
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
        Schema::dropIfExists('agent_contact_lists');
    }
}
