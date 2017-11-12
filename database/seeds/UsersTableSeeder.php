<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'userName' => 'test',
            'email'    => 'test@unomaha.edu',
            'password' => bcrypt('tester'),
            'userType'   => 'student',
        ]);
        \App\User::create([
            'userName' => 'leomessi',
            'email'    => 'leomessi@unomaha.edu',
            'password' => bcrypt('tester'),
            'userType'   => 'Faculty',
        ]);

        \App\User::create([
            'userName' => 'admin',
            'email'    => 'admin@unomaha.edu',
            'password' => bcrypt('tester'),
            'userType'   => 'Admin',
        ]);


        \App\Userprofile::create([
            'userName' => 'test',
            'fName'    => 'Test',
            'lName'  =>  'Name',
            'profileSummary'  =>  'All for test',
            'city'  =>  'Omaha',
            'state'  =>  'Nebraska',
            'country'  =>  'United States',
        ]);

        \App\Userprofile::create([
            'userName' => 'leomessi',
            'fName'    => 'Leo',
            'lName'  =>  'Messi',
            'profileSummary'  =>  'All for Messi',
            'city'  =>  'Omaha',
            'state'  =>  'Nebraska',
            'country'  =>  'United States',
        ]);

        \App\Userprofile::create([
            'userName' => 'admin',
            'fName'    => 'First',
            'lName'  =>  'Admin',
            'profileSummary'  =>  'All for admin',
            'city'  =>  'Omaha',
            'state'  =>  'Nebraska',
            'country'  =>  'United States',
        ]);
    }
}


