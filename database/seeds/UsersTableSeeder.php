<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_time_stamp = now();

       // dd($current_time_stamp);

        DB::table('tblusers')->insert([
            'RoleId' => '1',
            'FirstName' => "Saeed",
            'LastName'  => "Khan",
            'email'  => "saeed.histone@gmail.com",
            'password'  => bcrypt("saeed@123"),
            'CreatedAt'  => $current_time_stamp,
            'UpdatedAt'  => $current_time_stamp
        ]);
        DB::table('tblusers')->insert([
            'RoleId' => '2',
            'FirstName' => "Sahib",
            'LastName'  => "Shah",
            'email'  => "sahibshah@gmail.com",
            'password'  => bcrypt("sahib@123"),
            'CreatedAt'  => $current_time_stamp,
            'UpdatedAt'  => $current_time_stamp
        ]);
    }
}
