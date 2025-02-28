<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\StaticPageMetaTag;

class CreateStaticPageMetaTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('static_page_meta_tags', function (Blueprint $table) {
            $table->id();
              $table->string('page_name',500)->unique();
              $table->string('page_title',500)->nullable();
              $table->string('page_keyword',600)->nullable();
            $table->text('page_description')->nullable();
             $table->text('page_content')->nullable();
            $table->timestamps();
        });
        
  $data = [
    ['page_name'=>'/'],
    ['page_name'=>'manage'],
    ['page_name'=>'about-us'],
    ['page_name'=>'contact-us'],
    ['page_name'=>'body-corporate-hoa-and-share-block-loans'],
    ['page_name'=>'useful-links'],
    ['page_name'=>'online-services'],
    ['page_name'=>'online-services.online-applications'],
    ['page_name'=>'finance'],
    ['page_name'=>'insure'],
    ['page_name'=>'commercialreports'],
    ['page_name'=>'email-disclaimer'],
    ['page_name'=>'covid-19'],
    ['page_name'=>'terms-conditions'],
    ['page_name'=>'disclaimer'],
    ['page_name'=>'privacy-policy'],
    ['page_name'=>'manage.sectional-title-and-hoa-management'],
    ['page_name'=>'manage.commercial-property-management'],
    ['page_name'=>'manage.estate-management'],
    ['page_name'=>'manage.sectional-title-and-hoa-management.developer-services'],
    ['page_name'=>'manage.commercial-property-management.commercial-brokering-services'],
    ['page_name'=>'manage.commercial-property-management.commercial-landlord-services'],
    ['page_name'=>'manage.executive-managing-agent'],
    ['page_name'=>'manage.faqs'],
    ['page_name'=>'manage.stsm-act'],
    ['page_name'=>'manage.easy-guide-to-body-corporate-resolutions'],
    ['page_name'=>'property-management-tips'],
    ['page_name'=>'manage.sectional-title-and-hoa-management.sectional-title-management'],
    ['page_name'=>'manage.sectional-title-and-hoa-management.hoa-management'],
    ['page_name'=>'manage.sectional-title-and-hoa-management.estate-management'],
    ['page_name'=>'manage.sectional-title-and-hoa-management.financial-management'],
    ['page_name'=>'email-property-alert'],
    ['page_name'=>'agent-search'],
    ['page_name'=>'jobs'],
    ['page_name'=>'property-management-quote-request'],
    ['page_name'=>'report-maintenance-issues'],
    ['page_name'=>'newsletter-signup'],
    ['page_name'=>'contractors'],
    ['page_name'=>'rent.tenant-services'],
    ['page_name'=>'rent.rental-services'],
    ['page_name'=>'rent'],
    ['page_name'=>'rent.vacancy-marketing'],
    ['page_name'=>'rent.tenant-screening'],
    ['page_name'=>'rent.tenant-guide'],
    ['page_name'=>'rental-reports'],
    ['page_name'=>'rent.faqs'],
    ['page_name'=>'manage.commercial-property-management.commercial-tenant-services'],
    ['page_name'=>'manage.sectional-title-and-hoa-management.sectional-title-hoa.reference-sites-managed-by-trafalgar'],
    ['page_name'=>'sample-property-management-reports'],
    ['page_name'=>'jozicbdrentals'],
    ['page_name'=>'pier-14-brand-new-apartments-to-rent-in-north-end-port-elizabeth'],
    ['page_name'=>'the-summit-brand-new-apartments-to-rent-in-amanzimtoti'],
    ['page_name'=>'jozicbdrentals.jozicbdrentals-thank'],
    ['page_name'=>'pier-14-thank-you'],
    ['page_name'=>'newlegislation'],
    ['page_name'=>'newlegislation.new-legislation-questions'],
    ['page_name'=>'manage.sectional-title-and-hoa-management.sectional-title-management.stsm-act'],
    ['page_name'=>'manage.commercial-property-management.faqs-commercial'],
    ['page_name'=>'newlegislation.newlegislation-thank']
                
];
        StaticPageMetaTag::insert($data);
    }
    
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('static_page_meta_tags');
    }
}
