<?php

use Illuminate\Database\Seeder;

use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $photo_1 =Photo::create([
            'user_id' => 1,
            'description' => 'lorel lipsum Dolor Imit Photo Number 1',
            'path' => 'uploads/photos/1.png'
        ]);
        $photo_2 =Photo::create([
            'user_id' => 1,
            'description' => 'lorel lipsum Dolor Imit Photo Number 2',
            'path' => 'uploads/photos/2.png'
        ]);
        $photo_3 =Photo::create([
            'user_id' => 1,
            'description' => 'lorel lipsum Dolor Imit Photo Number 3',
            'path' => 'uploads/photos/3.png'
        ]);
        
        
    }
    
}
