<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_pages', function (Blueprint $table) {
            $table->id();
             $table->string('parent_page_name',300)->nullable();
             $table->string('page_name',500)->nullable();
             $table->string('page_featured_image',300)->nullable();
               $table->text('page_content')->nullable();
               $table->string('pdf_content',500)->nullable();
                $table->string('page_route_name',400)->nullable();
               
            $table->timestamps();
        });
        
         DB::table('custom_pages')->insert(['page_name' => 'terms-conditions',"page_content" => 'dummy content' ,'created_at' => now() ,'updated_at' => now()  ]);
          DB::table('custom_pages')->insert(['page_name' => 'disclaimer',"page_content" => 'dummy content' ,'created_at' => now() ,'updated_at' => now()  ]);
           DB::table('custom_pages')->insert(['page_name' => 'supplier-privacy-policy',"page_content" => 'dummy content' ,"pdf_content" => "pdf_content" ,'created_at' => now() ,'updated_at' => now()  ]);
            DB::table('custom_pages')->insert(['page_name' => 'privacy-policy',"page_content" => 'dummy content' ,'created_at' => now() ,'updated_at' => now()  ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_pages');
    }
}
