<?php

use Illuminate\Database\Seeder;

use App\Follower;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $follower_1 =Follower::create([
            'profile_id' => 1,
            'follower_id' => 2
        ]);
        $follower_2 =Follower::create([
            'profile_id' => 1,
            'follower_id' => 3
        ]);
        $follower_3 =Follower::create([
            'profile_id' => 1,
            'follower_id' => 4
        ]);
        
            
    }
}
