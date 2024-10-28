<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('game')->insert(
            [
                'title' => "Incubo",
                'description' => "We are a game studio that focuses on limitless creativity, deep experiences, and immersive depth. With a team comprised of bold artists, designers, writers, and developers, we are committed to creating interactive works of art that captivate, taking players on meaningful and satisfying journeys. From stunning visual design to captivating storylines, every title we release is a gateway to boundless alternate realities, inviting players to immerse themselves in unforgettable adventures.",
                'image' => "GameIcon_01.png",
                'link' => "/admin/home",
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('game')->insert(
            [
                'title' => "Incubo Mobile",
                'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni tempore voluptas unde vero numquam error beatae aliquid fuga nesciunt excepturi.",
                'image' => "GameIcon_02.png",
                'link' => "/admin/home",
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('game')->insert(
            [
                'title' => "RDBD Project",
                'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni tempore voluptas unde vero numquam error beatae aliquid fuga nesciunt excepturi.",
                'image' => "GameIcon_04.png",
                'link' => "/admin/home",
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('game')->insert(
            [
                'title' => "Anemorie",
                'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni tempore voluptas unde vero numquam error beatae aliquid fuga nesciunt excepturi.",
                'image' => "GameIcon_03.png",
                'link' => "/admin/home",
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
