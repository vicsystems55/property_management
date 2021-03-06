<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->bigInteger('project_type_id')->unsigned();
            $table->bigInteger('agent_id')->unsigned()->nullable();
            $table->bigInteger('client_id')->unsigned();

            $table->date('start_date');
            $table->date('end_date');

            $table->string('project_code');
            $table->string('location');
            $table->string('budget');
            $table->string('status')->default('request');

            $table->foreign('project_type_id')->references('id')->on('project_types');
        
            $table->foreign('agent_id')->references('id')->on('users');
            $table->foreign('client_id')->references('id')->on('users');
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
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('projects');
        Schema::enableForeignKeyConstraints();
        
        
    }
}
