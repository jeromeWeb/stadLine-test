<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use DB;
use Mail;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        // ->hourly();

        // $schedule->call(function () {
        //     DB::table('migrations')->delete();
        // })
        // ->weekly();
        //->mondays()
        //->at('13:00');



        $schedule->call(function(){
            
            $text = 'test bou test';
            $contacts = array('email' => 'sandradelaporte@gmail.com', 'email' => 'remi@gmail.com');

            foreach ($contacts as $contact) {
                $test = Mail::send('email.newsletter', ['email' => 'sandradelaporte@gmail.com', 'emailText' => $text], function($message)
                {
                    $message->from('motton@motton.com', 'Motton');
                    $message->to('sandradelaporte@gmail.com', 'Motton')->subject('Motton');
                });
            }

        })
        ->everyMinute();




    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
