<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('messages')->insert(
            [
                'name' => "Yayan",
                'email' => "Silver@gmail.com",
                'message' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt tempore totam maxime, ipsa in inventore harum saepe illo similique accusamus.",
                'read' => 0,
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('messages')->insert(
            [
                'name' => "Irwanto",
                'email' => "White@gmail.com",
                'message' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt tempore totam maxime, ipsa in inventore harum saepe illo similique accusamus.",
                'read' => 0,
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('messages')->insert(
            [
                'name' => "Ehsan",
                'email' => "Black@gmail.com",
                'message' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt tempore totam maxime, ipsa in inventore harum saepe illo similique accusamus.",
                'read' => 0,
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('messages')->insert(
            [
                'name' => "Ehsan2",
                'email' => "Black@gmail.com",
                'message' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt tempore totam maxime, ipsa in inventore harum saepe illo similique accusamus.",
                'read' => 0,
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('messages')->insert(
            [
                'name' => "Ehsan3",
                'email' => "Black@gmail.com",
                'message' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt tempore totam maxime, ipsa in inventore harum saepe illo similique accusamus.",
                'read' => 0,
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('messages')->insert(
            [
                'name' => "Ehsan4",
                'email' => "Black@gmail.com",
                'message' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt tempore totam maxime, ipsa in inventore harum saepe illo similique accusamus.",
                'read' => 0,
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
