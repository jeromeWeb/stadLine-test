<?php

use Illuminate\Database\Seeder;
use App\Round;

class RoundTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$rounds = [
		            [
		            	'game_id' => 1,
		            	'nb_card' => '10',
		                'nb_round' => '1',
		            ],
		            [
		            	'game_id' => 2,
		            	'nb_card' => '9',
		                'nb_round' => '2',
		            ],
		            [
		            	'game_id' => 3,
		            	'nb_card' => '8',
		                'nb_round' => '3',
		            ],
		            [
		            	'game_id' => 4,
		            	'nb_card' => '7',
		                'nb_round' => '4',
		            ],
		            [
		            	'game_id' => 5,
		            	'nb_card' => '6',
		                'nb_round' => '5',
		            ],
		            [
		            	'game_id' => 6,
		            	'nb_card' => '5',
		                'nb_round' => '6',
		            ],
		            [
		            	'game_id' => 7,
		            	'nb_card' => '4',
		                'nb_round' => '7',
		            ],
		            [
		            	'game_id' => 8,
		            	'nb_card' => '3',
		                'nb_round' => '8',
		            ],
		            [
		            	'game_id' => 9,
		            	'nb_card' => '2',
		                'nb_round' => '9',
		            ],
		            [
		            	'game_id' => 10,
		            	'nb_card' => '1',
		                'nb_round' => '10',
		            ],
		            [
		            	'game_id' => 11,
		            	'nb_card' => '1',
		                'nb_round' => '11',
		            ],
		            [
		            	'game_id' => 12,
		            	'nb_card' => '2',
		                'nb_round' => '12',
		            ],
		            [
		            	'game_id' => 13,
		            	'nb_card' => '3',
		                'nb_round' => '13',
		            ],
		            [
		            	'game_id' => 14,
		            	'nb_card' => '4',
		                'nb_round' => '14',
		            ],
		            [
		            	'game_id' => 15,
		            	'nb_card' => '5',
		                'nb_round' => '15',
		            ],
		            [
		            	'game_id' => 16,
		            	'nb_card' => '6',
		                'nb_round' => '16',
		            ],
		            [
		            	'game_id' => 17,
		            	'nb_card' => '7',
		                'nb_round' => '17',
		            ],
		            [
		            	'game_id' => 18,
		            	'nb_card' => '8',
		                'nb_round' => '18',
		            ],
		            [
		            	'game_id' => 19,
		            	'nb_card' => '9',
		                'nb_round' => '19',
		            ],
		            [
		            	'game_id' => 20,
		            	'nb_card' => '10',
		                'nb_round' => '20',
		            ],
		        ];

		foreach ($rounds as $round) {
            $r = Round::create([
            	'game_id' => $round['game_id'],
            	'nb_card' => $round['nb_card'],
                'nb_round' => $round['nb_round']
            ]);

            RoundUsers()->sync([
            	"user_id" => 2,
            	"round_id" => $r->id,
            	"bet" => '3',
            	"result" => '2',
            	"point" => '10'
            ]);
    	}
    }
}
