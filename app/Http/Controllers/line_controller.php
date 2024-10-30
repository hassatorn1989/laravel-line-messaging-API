<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LINE\Clients\MessagingApi\Model\PushMessageRequest;
use LINE\Clients\MessagingApi\Model\TextMessage;

class line_controller extends Controller
{

    // protected $config;


    function send_message()
    {
        $client = new \GuzzleHttp\Client();
        $config = new \LINE\Clients\MessagingApi\Configuration();
        $l = $config->setAccessToken('channel_access_token');
        $messagingApi = new \LINE\Clients\MessagingApi\Api\MessagingApiApi(
            client: $client,
            config: $config,
        );

        $message = new TextMessage(['type' => 'text', 'text' => 'hello! By Hassatorn']);
        // $request = new ReplyMessageRequest([
        //         'replyToken' => '<reply token>',
        //         'messages' => [$message],
        //     ]);
        // $response = $messagingApi->replyMessage($request);
        $request = new PushMessageRequest([
            'to' => 'U1121b13d62626a5c54cbf6173c0ab44a',
            'messages' => [$message],
        ]);
        $response = $messagingApi->pushMessage($request);

        return response()->json($response);
    }


    // function hook(Request $request)
    // {
    //     // create line hook
    //     $events = $request->events;

    //     foreach ($events as $event) {
    //         if ($event['type'] === 'message' && $event['message']['type'] === 'text') {
    //             $replyToken = $event['replyToken'];
    //             $message = $event['message']['text'];
    //             $textMessageBuilder = new TextMessage($message);

    //             $response = new ReplyMessageRequest($replyToken, $textMessageBuilder);
    //             $response->send();
    //         }
    //     }

    //     return 'OK';
    // }
}
