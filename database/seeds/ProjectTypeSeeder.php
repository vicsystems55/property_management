<?php

use Illuminate\Database\Seeder;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('project_types')->insertOrIgnore([

            [
                "project_type" => "Bungalow",
                "category" => "Residential",
                "description" => "A bungalow is a small, square, single-story home with front porch. The single floor is raised up with front steps leading up to the porch. Often there’s a single dormer window built into a pitched roof in the attic.",
                "status" => "active"
            ],

            
            
        ]);
            

        
    }
}

