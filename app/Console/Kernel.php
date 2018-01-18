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

            $title = 'Semaine du '.date("Y-m-d", time()-7*24*3600).' au '.date("Y-m-d", time()-3*24*3600).' | Stadline | Le Motton';

            $text = 'Bravo à :';

            $emails = array('sandradelaporte@gmail.com', 'remi@gmail.com');


            foreach ($emails as $email) {
                $test = Mail::send('email.newsletter', ['email' => $email, 'title' => $title], function($message)
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
