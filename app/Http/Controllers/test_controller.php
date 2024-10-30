<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LINE\Clients\MessagingApi\Model\ReplyMessageRequest;
use LINE\Clients\MessagingApi\Model\TextMessage;

class test_controller extends Controller
{
    // function index() {
    //     // Your Channel Access Token and Channel Secret
    //     $channelToken = 'YOUR_CHANNEL_ACCESS_TOKEN';
    //     $channelSecret = 'YOUR_CHANNEL_SECRET';

    //     // Create the LINE Bot client
    //     $httpClient = new CurlHTTPClient($channelToken);
    //     $bot = new LINEBot($httpClient, ['channelSecret' => $channelSecret]);

    //     // Get the incoming request body
    //     $body = file_get_contents('php://input');
    //     $events = json_decode($body, true);

    //     // Verify the signature
    //     $signature = $_SERVER['HTTP_X_LINE_SIGNATURE'];
    //     if (!$bot->validateSignature($body, $signature)) {
    //         http_response_code(400);
    //         echo 'Invalid signature';
    //         exit;
    //     }

    //     // Process each event
    //     foreach ($events['events'] as $event) {
    //         if ($event['type'] === 'message' && $event['message']['type'] === 'text') {
    //             $replyToken = $event['replyToken'];
    //             $messageText = $event['message']['text'];

    //             // Create a text response
    //             $responseMessage = new TextMessageBuilder('You said: ' . $messageText);

    //             // Reply to the user
    //             $bot->replyMessage($replyToken, $responseMessage);
    //         }
    //     }

    //     echo 'OK';
    // }


    function hook(Request $request) {

    }
}
