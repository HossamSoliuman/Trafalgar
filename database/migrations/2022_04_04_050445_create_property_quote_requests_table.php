<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyQuoteRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_quote_requests', function (Blueprint $table) {
            $table->id();
            $table->string("name",300);
            $table->string("surname",200);
            $table->string("designation",300);
            $table->string("name_of_scheme",300);
            $table->string("name_of_units",300);
            $table->string("property_address",400);
            $table->string("property_suburb",300);
            $table->string("property_city",300);
            $table->string("email",200);
            $table->string("cellphone",100);
            $table->string("levy_arrears",400);
            $table->string("when_scheme_built",500);
            $table->string("why_new_agent",500);
            $table->string("audited_statement",400);
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
        Schema::dropIfExists('property_quote_requests');
    }
}
