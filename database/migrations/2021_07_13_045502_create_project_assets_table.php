<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_assets', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('project_id')->unsigned();
            $table->bigInteger('progress_report_id')->unsigned();
            
            $table->string('type');
            
            $table->string('asset_path');
            

            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('progress_report_id')->references('id')->on('progress_reports');
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
        Schema::dropIfExists('project_assets');
    }
}
