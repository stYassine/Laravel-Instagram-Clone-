<?php

use Illuminate\Database\Seeder;

use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $comment_1 =Comment::create([
            'user_id' => 2,
            'photo_id' => 1,
            'body' => 'Lorem Lipsum Dolor Imit Sub Comment 1'
        ]);
        $comment_2 =Comment::create([
            'user_id' => 2,
            'photo_id' => 1,
            'body' => 'Lorem Lipsum Dolor Imit Sub Comment 2'
        ]);
        $comment_3 =Comment::create([
            'user_id' => 2,
            'photo_id' => 1,
            'body' => 'Lorem Lipsum Dolor Imit Sub Comment 3'
        ]);
        $comment_4 =Comment::create([
            'user_id' => 2,
            'photo_id' => 2,
            'body' => 'Lorem Lipsum Dolor Imit Sub Comment 4'
        ]);
        
    }
}
