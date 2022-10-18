<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessProduct;
use Illuminate\Http\Request;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class OrderController extends Controller
{
    public function send_message(Request $message)
    {
        $connection = new AMQPStreamConnection(
            env('RABBITMQ_HOST'),
            env('RABBITMQ_PORT'),
            env('RABBITMQ_USER'),
            env('RABBITMQ_PASSWORD'),
            env('RABBITMQ_VHOST')
        );
        $channel =  $connection->channel();
        $msg = new AMQPMessage($message);        
        $channel->basic_publish($msg, 'produto_exchange', 'produto_key');        
        $channel->close();
        $connection->close();
    }
}
