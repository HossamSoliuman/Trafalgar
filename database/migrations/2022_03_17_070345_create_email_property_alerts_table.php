<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailPropertyAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_property_alerts', function (Blueprint $table) {
            $table->id();
              $table->string('name',200)->nullable();
             $table->string('surname',200)->nullable();
             $table->string('full_name',400)->nullable();
               $table->string('email',200)->nullable();
             $table->string('listing_type',200)->nullable();
               $table->string('property_type',500)->nullable();
             $table->string('region',200)->nullable();
             $table->string('property_for',200)->nullable();
              $table->string('suburg',200)->nullable();
               $table->string('minprice',200)->nullable();
                $table->string('maxprice',200)->nullable();
                 $table->integer('check_status')->default(1)->comment('1 - alert active , 0 - not active');
                
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
        Schema::dropIfExists('email_property_alerts');
    }
}
