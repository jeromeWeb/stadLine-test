<?php

use Illuminate\Database\Seeder;
use App\User;

class MottonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $users = [
            [
            	'pseudo' => 'sandra',
                'email' => 'sandra@gmail.com',
                'google_id' => 2,
                "type" => 0,
            ],
            [
            	'pseudo' => 'rémi',
                'email' => 'remi@gmail.com',
                'google_id' => 3,
                "type" => 1,
            ],
            [
            	'pseudo' => 'guillaume',
                'email' => 'admin',
                'google_id' => 4,
                "type" => 0,
            ],
            [
            	'pseudo' => 'nicolas',
                'email' => 'nicolas@gmail.com',
                'google_id' => 5,
                "type" => 1,
            ],
            [
            	'pseudo' => 'manu',
                'email' => 'manu@gmail.com',
                'google_id' => 6,
                "type" => 0,
            ],
            [
            	'pseudo' => 'éric',
                'email' => 'eric@gmail.com',
                'google_id' => 7,
                "type" => 1,
            ],
            [
            	'pseudo' => 'zoé',
                'email' => 'zoé@gmail.com',
                'google_id' => 8,
                "type" => 0,
            ],
            [
            	'pseudo' => 'dimitri',
                'email' => 'dimitri@gmail.com',
                'google_id' => 9,
                "type" => 1,
            ],
        ];

        foreach ($users as $user) {
            User::create([
                'pseudo' => $user['pseudo'],
                'email' => $user['email'],
                'google_id' => $user['google_id'],
                'type' => $user['type']
            ]);
    	}
	}
}