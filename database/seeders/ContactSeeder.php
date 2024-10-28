<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact')->insert(
            [
                'title' => "Instagram",
                'contact' => "@inngamez",
                'link' => "https://www.instagram.com/",
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('contact')->insert(
            [
                'title' => "Linkedin",
                'contact' => "inngamez",
                'link' => "https://www.linkedin.com/",
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('contact')->insert(
            [
                'title' => "Facebook",
                'contact' => "inngamez",
                'link' => "https://www.facebook.com/",
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('contact')->insert(
            [
                'title' => "Youtube",
                'contact' => "inngamez",
                'link' => "https://www.youtube.com/",
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
