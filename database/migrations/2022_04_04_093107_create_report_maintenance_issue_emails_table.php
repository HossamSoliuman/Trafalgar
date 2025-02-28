<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportMaintenanceIssueEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_maintenance_issue_emails', function (Blueprint $table) {
            $table->id();
            $table->string("building_name",300);
            $table->string("unit_no",300);
            $table->string("physical_address",300);
            $table->string("name",300);
            $table->string("tel",100);
            $table->string("cell",100);
            $table->string("email",100);
            $table->string("report_maintenance",400);
            $table->string("urgency",300);
            $table->string("responsible_for_account",400);
            $table->string("quote_first",300);
            $table->string("upload_file1",300);
            $table->string("upload_file2",300);
            $table->string("upload_file3",300);
            $table->string("upload_file4",300);
            $table->string("upload_file5",300);
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
        Schema::dropIfExists('report_maintenance_issue_emails');
    }
}
