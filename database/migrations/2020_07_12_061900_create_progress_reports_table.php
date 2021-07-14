<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('progress_reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->unsigned();
            $table->bigInteger('project_stage_id')->unsigned();
            $table->integer('percent')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->longText('note_from_agent');
            $table->string('status')->default('pending');
            $table->date('project_start_date');
            $table->date('project_end_date');

            $table->foreign('project_id')->references('id')->on('projects');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('progress_reports');
        Schema::enableForeignKeyConstraints();
        
    }
}
