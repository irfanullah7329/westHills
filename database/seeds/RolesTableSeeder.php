<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Current time stamp
        $current_time_stamp = now();

        DB::table('tblroles')->insert([

            'RoleName' =>  "admin",
            'RoleDescription' => "This is admin role",
            'CreatedAt'  => $current_time_stamp,
            'UpdatedAt'  => $current_time_stamp
        ]);

        DB::table('tblroles')->insert([
            
            'RoleName' =>  "user",
            'RoleDescription' => "This is user role",
            'CreatedAt'  => $current_time_stamp,
            'UpdatedAt'  => $current_time_stamp
        ]);
    }
}
