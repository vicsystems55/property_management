<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_stages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_type_id')->unsigned();

            $table->string('stage_name');
            $table->longText('description');
            $table->string('image')->nullalbe();
            $table->integer('percent_allocation')->nullalbe();
            $table->string('status')->default('active');

            $table->foreign('project_type_id')->references('id')->on('project_types');            
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
        Schema::dropIfExists('project_stages');
    }
}
