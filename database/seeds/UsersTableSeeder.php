<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        /*$user_1 =User::create([
            'name' => 'Yassine',
            'email' => 'yassine_msiah@hotmail.com',
            'password' => bcrypt(123456),
            'profile' => 'uploads/avatars/avatar.jpg',
            'username' => 'yassineMsiah',
            'website' => '',
            'bio' => '',
            'number' => '',
            'gender' => 'male'
        ]);*/
        $user_2 =User::create([
            'name' => 'James',
            'email' => 'andy_james@hotmail.com',
            'password' => bcrypt(123456),
            'profile' => 'uploads/avatars/avatar.jpg',
            'username' => 'andyJames',
            'website' => '',
            'bio' => '',
            'number' => '',
            'gender' => 'male'
        ]);
        $user_3 =User::create([
            'name' => 'Tim',
            'email' => 'tim_humble@hotmail.com',
            'password' => bcrypt(123456),
            'profile' => 'uploads/avatars/avatar.jpg',
            'username' => 'timHumble',
            'website' => '',
            'bio' => '',
            'number' => '',
            'gender' => 'male'
        ]);
        $user_4 =User::create([
            'name' => 'Eric',
            'email' => 'eric_green@hotmail.com',
            'password' => bcrypt(123456),
            'profile' => 'uploads/avatars/avatar.jpg',
            'username' => 'ericGreen8',
            'website' => '',
            'bio' => '',
            'number' => '',
            'gender' => 'male'
        ]);
        
        
    }
    
    
}
