<?php

use Illuminate\Database\Seeder;

class ProjectStageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('project_stages')->insertOrIgnore([

            [
                "project_type_id" => 1,
                "percent_allocation" => '10',
                "stage_name" => "CREATING A CONCEPT AND DESIGN",
                "description" => "The very first stage of construction is to create a concept, followed by a design and blueprints. Typically, this is done with the help of an architect to ensure everything is up-to-code and that the design will be structurally-sound and stable. We work with our clients to ensure that the building will suit their needs and serve the business for many years to come.",
                "status" => "active"
            ],

            
            [
                "project_type_id" => 1,
                "percent_allocation" => '10',
                "stage_name" => "OBTAINING BUILDING PERMITS",
                "description" => "Once you have blueprints and construction plans, you will need to obtain the right building and construction permits. This process will be ongoing throughout the construction project, as you need to obtain different permits at different times. Working with an experienced construction firm aids this process immensely. Our experience in obtaining the proper permits at the right time help our process run smoothly and on time.",
                "status" => "active"
            ],

            [
                "project_type_id" => 1,
                "percent_allocation" => '10',
                "stage_name" => "CLEARING AND EXCAVATING THE LAND",
                "description" => "After obtaining your initial building permits, your construction project will commence by clearing and excavating the land upon which you want to build. This includes removing any trees, boulders or other obstacles that are in the way of your building, and leveling or grading the ground.",
                "status" => "active"
            ],

            [
                "project_type_id" => 1,
                "percent_allocation" => '10',
                "stage_name" => "POURING THE FOUNDATION",
                "description" => "When the space you are building one is cleared and excavated, the foundation can be poured. Depending on the size of your building and the stability of the land, preparing the subsurface may need to be done prior to the foundation being poured.",
                "status" => "active"
            ],

            [
                "project_type_id" => 1,
                "percent_allocation" => '10',
                "stage_name" => "COMPLETING THE FRAMING",
                "description" => "Once the foundation has been poured and cured, framing begins on your building. This may include installing wood frames or steel beams. This process does take a while and it is important that everything is done correctly. This essentially sets the groundwork upon which all the other aspects of your building will follow.",
                "status" => "active"
            ],


            [
                "project_type_id" => 1,
                "percent_allocation" => '10',
                "stage_name" => "DOING ROUGH ELECTRICAL AND PLUMBING",
                "description" => "After the building has been completed framed out, specialty contractor will come in to complete rough electrical and plumbing work. This involves installing the pipes and wires where they need to go. Their job will not be completed at this point, but it helps to get the rough work in place so drywall, insulation and ceilings can go up.",
                "status" => "active"
            ],

            [
                "project_type_id" => 1,
                "percent_allocation" => '10',
                "stage_name" => "INSTALLING THE ROOF",
                "description" => "About the same time that the rough electrical and plumbing work is done, roofers come in to complete the roof on the building. This needs to be done before any further work inside of the building can take place, as rain and outdoor elements can damage the work that is taking place in the next few steps. About this time, contractors will also be called in to complete the exterior of the building, further protecting the interior work that is about to take place.",
                "status" => "active"
            ],

            [
                "project_type_id" => 1,
                "percent_allocation" => '10',
                "stage_name" => "TAKING CARE OF HEATING AND COOLING NEEDS",
                "description" => "Once the building has exterior walls and a roof, heating and cooling needs are addressed. Vents, ductwork and the heating and cooling unit are all installed.",
                "status" => "active"
            ],

            [
                "project_type_id" => 1,
                "percent_allocation" => '10',
                "stage_name" => "COMPLETING THE INTERIOR",
                "description" => "Upon the heating and cooling work being completed, the interior is completed. This includes adding insulation, putting up drywall and adding ceilings. An electrician often comes out during this stage and finishes up adding outlets and lighting fixtures.",
                "status" => "active"
            ],

            [
                "project_type_id" => 1,
                "percent_allocation" => '10',
                "stage_name" => "INSTALLING FIXTURES",
                "description" => "Once the interior walls are up, all of the fixtures inside of a space can be added. This includes things like toilets, cabinets, windows, doors and elevators.",
                "status" => "active"
            ],

            [
                "project_type_id" => 1,
                "percent_allocation" => '0',
                "stage_name" => "FINISHING UP",
                "description" => "The last stage of construction involves putting the finishing touches on the building. This involves installing flooring, painting the walls, putting countertops in or adding faucets in the bathrooms. Once this stage is done, the building process will be completed and you will be left with a beautiful building.",
                "status" => "active"
            ],
            
            
        ]);

        
    }
}
