<?php

namespace AppBundle\Consumer;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

class HelloRabbitmqConsumer implements ConsumerInterface
{
    public function execute(AMQPMessage $msg)
    {
        printf("Hello I am consumer on App1 => %s!%s", $msg->body, PHP_EOL);
    }
}