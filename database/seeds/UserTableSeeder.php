<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insertOrIgnore([

            [
                "name" => "Administrator",
                "email" => "admin@amazingpromiseltd.com",
                "user_code" => "APG20220",
                "status" => "active",
                "country" => "Nigeria",
                "address" => "Wuye",
                "role" => "admin",
                "phone" => "09011221122",
                "bio" => "System Administrator",
                "email_verified_at" => Carbon::now(),
                "password" => Hash::make('amazingpromise2021'),
            ],

            [
                "name" => "System Agent1",
                "email" => "agent1@amazingpromisetltd.com",
                "user_code" => "APG220114",
                "status" => "active",
                "country" => "Nigeria",
                "address" => "Wuye",
                "role" => "agent",
                "phone" => "090112212",
                "bio" => "System Agent1",
                "email_verified_at" => Carbon::now(),
                "password" => Hash::make('amazingpromise2021'),
            ],

            [
                "name" => "System Agent2",
                "email" => "agent2@amazingpromisetltd.com",
                "user_code" => "APG220117",
                "status" => "active",
                "country" => "Nigeria",
                "address" => "Wuye",
                "role" => "agent",
                "phone" => "090112212",
                "bio" => "System Agent2",
                "email_verified_at" => Carbon::now(),
                "password" => Hash::make('amazingpromise2021'),
            ],

            [
                "name" => "System Agent3",
                "email" => "agent3@amazingpromisetltd.com",
                "user_code" => "APG220517",
                "status" => "active",
                "country" => "Nigeria",
                "address" => "Wuye",
                "role" => "agent",
                "phone" => "090112212",
                "bio" => "System Agent3",
                "email_verified_at" => Carbon::now(),
                "password" => Hash::make('amazingpromise2021'),
            ],

            [
                "name" => "System Agent4",
                "email" => "agent4@amazingpromisetltd.com",
                "user_code" => "APG230517",
                "status" => "active",
                "country" => "Nigeria",
                "address" => "Wuye",
                "role" => "agent",
                "phone" => "090112212",
                "bio" => "System Agent4",
                "email_verified_at" => Carbon::now(),
                "password" => Hash::make('amazingpromise2021'),
            ],

            [
                "name" => "Joy Abia",
                "email" => "joy@agent.com",
                "user_code" => "APG232517",
                "status" => "active",
                "country" => "Nigeria",
                "address" => "Wuye",
                "role" => "agent",
                "phone" => "090112212",
                "bio" => "I am agent Joy.",
                "email_verified_at" => Carbon::now(),
                "password" => Hash::make('amazingpromise2021'),
            ],

            [
                "name" => "Jane Doe",
                "email" => "janedoe@mail.com",
                "user_code" => "APG2203300",
                "status" => "active",
                "country" => "Nigeria",
                "address" => "Wuye",
                "role" => "user",
                "phone" => "090112212",
                "bio" => "Test client",
                "email_verified_at" => Carbon::now(),
                "password" => Hash::make('amazingpromise2021'),
            ],


            [
                "name" => "Jogn Doe",
                "email" => "johndoe@mail.com",
                "user_code" => "APG2204400",
                "status" => "active",
                "country" => "Nigeria",
                "address" => "Wuye",
                "role" => "user",
                "phone" => "0901122232",
                "bio" => "Test client 2",
                "email_verified_at" => Carbon::now(),
                "password" => Hash::make('amazingpromise2021'),
            ],
            
            
             ]);
            
    }
}


