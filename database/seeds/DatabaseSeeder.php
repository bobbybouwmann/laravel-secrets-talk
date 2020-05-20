<?php

use App\Post;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'Laracon EU becomes Laracon Online',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dicta illum modi nulla voluptas? Consequuntur cumque, cupiditate eum illum labore maxime minima molestias nisi quasi repellendus ut vel velit, voluptates?'
        ]);

        Post::create([
            'title' => '6 reasons to watch Laracon Online',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dicta illum modi nulla voluptas? Consequuntur cumque, cupiditate eum illum labore maxime minima molestias nisi quasi repellendus ut vel velit, voluptates?'
        ]);
    }
}

