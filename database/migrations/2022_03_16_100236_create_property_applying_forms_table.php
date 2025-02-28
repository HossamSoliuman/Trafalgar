<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyApplyingFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_applying_forms', function (Blueprint $table) {
            $table->id();
            $table->string('property_id',200)->nullable();
            $table->string('property_name',400)->nullable();
            $table->string('property_city',200)->nullable();
            $table->string('property_suburb',200)->nullable();
            $table->string('property_garage',100)->nullable();
            $table->string('property_open_bay',400)->nullable();
            $table->string('property_occupation_date',100)->nullable();
            $table->string('property_lease_term',400)->nullable();
            $table->string('property_rental',400)->nullable();
            $table->text('property_detail')->nullable();
            $table->string('personal_id_number',200)->nullable();
            $table->string('personal_resident_permit_no',200)->nullable();
            $table->string('personal_passport_number',200)->nullable();
            $table->string('personal_nationality',100)->nullable();
            $table->string('personal_visa_exp_date',200)->nullable();
            $table->string('personal_title',400)->nullable();
            $table->string('personal_first_name',400)->nullable();
            $table->string('personal_surname',400)->nullable();
            $table->string('personal_dob',200)->nullable();
            $table->string('personal_residential_address',400)->nullable();
            $table->string('personal_province',400)->nullable();
            $table->string('personal_postal_address',400)->nullable();
            $table->string('personal_postal_code',200)->nullable();
            $table->string('personal_email',200)->nullable();
            
            $table->string('personal_cell_no',100)->nullable();
            $table->string('personal_tel_no',100)->nullable();
            $table->string('personal_next_of_kin',400)->nullable();
            $table->string('personal_address',400)->nullable();
            $table->string('personal_postal_code_2',100)->nullable();
            
            
            $table->string('personal_marital_status',100)->nullable();
            $table->string('personal_monthly_gross_salary',200)->nullable();
            $table->string('personal_monthly_net_salary',200)->nullable();
            $table->string('personal_monthly_instalment',400)->nullable();
            $table->string('personal_income_tax_reg_number',200)->nullable();
            
            $table->string('landlord_present_lessor',400)->nullable();
            $table->string('landlord_tel_no',200)->nullable();
            $table->string('landlord_cell_no',200)->nullable();
            $table->string('landlord_rent_paid',400)->nullable();
            $table->string('landlord_year_in_occupation',400)->nullable();
            
            $table->string('landlord_personal_reference',400)->nullable();
            $table->string('landlord_relation',400)->nullable();
            $table->string('emp_info_employer_name',400)->nullable();
            $table->string('emp_info_employer_address',400)->nullable();
            $table->string('emp_info_occupation',400)->nullable();
            $table->string('emp_info_paye_tax_no',200)->nullable();
            $table->string('emp_info_period_employed',400)->nullable();
            $table->string('emp_info_tel_no',200)->nullable();
            $table->string('emp_info_fax_no',200)->nullable();
            $table->string('emp_info_contact_name',400)->nullable();
            $table->string('financial_you_have_judgements',400)->nullable();
            $table->string('financial_details',400)->nullable();
            $table->string('bank',400)->nullable();
            $table->string('bank_branch_name',400)->nullable();
              $table->string('bank_branch_code',200)->nullable();
            $table->string('bank_account_number',400)->nullable();
            $table->string('get_agent',400)->nullable();
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
        Schema::dropIfExists('property_applying_forms');
    }
}
