<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // $faker = Factory::create();

        DB::table('users')->insert([
            [
                'name' => 'Toya Kawakami',
                'slug' => 'toya-kawakami',
                'email' => 'tojyapan925@gmail.com',
                'password' => bcrypt('secret'),
                'bio' => 'I am Toya Kawakami'
            ],
            [
                'name' => 'Jon Doe',
                'slug' => 'jon-doe',
                'email' => 'jondoe@example.com',
                'password' => bcrypt('secret'),
                'bio' => 'I am Jon Doe'
            ],
            [
                'name' => 'Nanashi Gonbe',
                'slug' => 'nanashi-gonbe',
                'email' => 'nanashi@example.com',
                'password' => bcrypt('secret'),
                'bio' => 'I am Nanashi Gonbe'
            ]
        ]);
    }
}
