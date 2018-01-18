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
		            	'nb_card' => '10',
		                'nb_round' => '1',
		            ],
		            [
		            	'nb_card' => '9',
		                'nb_round' => '2',
		            ],
		            [
		            	'nb_card' => '8',
		                'nb_round' => '3',
		            ],
		            [
		            	'nb_card' => '7',
		                'nb_round' => '4',
		            ],
		            [
		            	'nb_card' => '6',
		                'nb_round' => '5',
		            ],
		            [
		            	'nb_card' => '5',
		                'nb_round' => '6',
		            ],
		            [
		            	'nb_card' => '4',
		                'nb_round' => '7',
		            ],
		            [
		            	'nb_card' => '3',
		                'nb_round' => '8',
		            ],
		            [
		            	'nb_card' => '2',
		                'nb_round' => '9',
		            ],
		            [
		            	'nb_card' => '1',
		                'nb_round' => '10',
		            ],
		            [
		            	'nb_card' => '1',
		                'nb_round' => '11',
		            ],
		            [
		            	'nb_card' => '2',
		                'nb_round' => '12',
		            ],
		            [
		            	'nb_card' => '3',
		                'nb_round' => '13',
		            ],
		            [
		            	'nb_card' => '4',
		                'nb_round' => '14',
		            ],
		            [
		            	'nb_card' => '5',
		                'nb_round' => '15',
		            ],
		            [
		            	'nb_card' => '6',
		                'nb_round' => '16',
		            ],
		            [
		            	'nb_card' => '7',
		                'nb_round' => '17',
		            ],
		            [
		            	'nb_card' => '8',
		                'nb_round' => '18',
		            ],
		            [
		            	'nb_card' => '9',
		                'nb_round' => '19',
		            ],
		            [
		            	'nb_card' => '10',
		                'nb_round' => '20',
		            ],
		        ];

		foreach ($rounds as $round) {
            Round::create([
            	'nb_card' => $round['nb_card'],
                'nb_round' => $round['nb_round']
            ]);
    	}
    }
}
