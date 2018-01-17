<?php

namespace App\Tools;

use ThreadMeUp\Slack\Client;

class SlackApiTools
{

    public static function sendTo($chat, $message) {

        $slack = new Client(config('slack.preprod'));

        $chat = $slack->chat($chat);
        $result = $chat->send($message);
    }
}