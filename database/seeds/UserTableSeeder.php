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
                "email" => "admin@amazingpromisegrouptltd.com",
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
                "name" => "System Agent",
                "email" => "agent@amazingpromisegrouptltd.com",
                "user_code" => "APG220110",
                "status" => "active",
                "country" => "Nigeria",
                "address" => "Wuye",
                "role" => "agent",
                "phone" => "090112212",
                "bio" => "System Agent",
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


