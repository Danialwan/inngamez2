<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('page')->insert(
            [
                'section' => "homeDescription",
                'text' => "We are a game studio that focuses on limitless creativity, deep experiences, and immersive depth. With a team comprised of bold artists, designers, writers, and developers, we are committed to creating interactive works of art that captivate, taking players on meaningful and satisfying journeys. From stunning visual design to captivating storylines, every title we release is a gateway to boundless alternate realities, inviting players to immerse themselves in unforgettable adventures.",
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('page')->insert(
            [
                'section' => "aboutDescription",
                'text' => "Our team is a collection of talented, passionate, and dedicated individuals who transform ideas into extraordinary creations. From artists who bring worlds to life with stunning visuals, to designers who craft innovative gameplay mechanics, and writers who create captivating stories, each team member brings their unique contribution to crafting inspiring games. We share a common vision of creating unforgettable experiences for players, and we work together collaboratively and supportively to achieve that goal. With diversity in backgrounds, skills, and perspectives, we form a strong and dynamic team, ready to tackle challenges and create outstanding works together.",
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
