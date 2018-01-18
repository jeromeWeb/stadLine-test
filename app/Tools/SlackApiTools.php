<?php

namespace App\Tools;

use ThreadMeUp\Slack\Client;

class SlackApiTools
{

    public static function sendTo($chat, $message) {

        if(env('APP_ENV') == 'local') $slack = new Client(config('slack.preprod'));
        else if(env('APP_ENV') == 'prod') $slack = new Client(config('slack.prod'));

        $chat = $slack->chat($chat);
        $result = $chat->send($message);
    }
}