<?php

namespace ContainerMCvFz3j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOldSoundRabbitMq_OrderCreateAudiMercedesConsumerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'old_sound_rabbit_mq.order_create_audi_mercedes_consumer' shared service.
     *
     * @return \OldSound\RabbitMqBundle\RabbitMq\Consumer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'rabbitmq-bundle'.\DIRECTORY_SEPARATOR.'RabbitMq'.\DIRECTORY_SEPARATOR.'BaseAmqp.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'rabbitmq-bundle'.\DIRECTORY_SEPARATOR.'RabbitMq'.\DIRECTORY_SEPARATOR.'DequeuerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'rabbitmq-bundle'.\DIRECTORY_SEPARATOR.'RabbitMq'.\DIRECTORY_SEPARATOR.'BaseConsumer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'rabbitmq-bundle'.\DIRECTORY_SEPARATOR.'RabbitMq'.\DIRECTORY_SEPARATOR.'Consumer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'rabbitmq-bundle'.\DIRECTORY_SEPARATOR.'RabbitMq'.\DIRECTORY_SEPARATOR.'ConsumerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Consumer'.\DIRECTORY_SEPARATOR.'OrderCreateAudiMercedesConsumer.php';

        $container->services['old_sound_rabbit_mq.order_create_audi_mercedes_consumer'] = $instance = new \OldSound\RabbitMqBundle\RabbitMq\Consumer(($container->services['old_sound_rabbit_mq.connection.default'] ?? $container->load('getOldSoundRabbitMq_Connection_DefaultService')));

        $instance->setExchangeOptions(['name' => 'order_create_ex', 'type' => 'topic', 'passive' => false, 'durable' => true, 'auto_delete' => false, 'internal' => false, 'nowait' => false, 'declare' => true, 'arguments' => NULL, 'ticket' => NULL]);
        $instance->setQueueOptions(['name' => 'order_create_audi_mercedes_qu', 'routing_keys' => [0 => 'audi.*', 1 => '#.mercedes.*'], 'passive' => false, 'durable' => true, 'exclusive' => false, 'auto_delete' => false, 'nowait' => false, 'declare' => true, 'arguments' => NULL, 'ticket' => NULL]);
        $instance->setCallback([0 => new \App\Consumer\OrderCreateAudiMercedesConsumer([0 => $instance], ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))), 1 => 'execute']);
        if ($container->has('event_dispatcher')) {
            $instance->setEventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
        }

        return $instance;
    }
}
