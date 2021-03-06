<?php

namespace ContainerNxHyxH2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOldSoundRabbitMq_Connection_DefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'old_sound_rabbit_mq.connection.default' shared service.
     *
     * @return \PhpAmqpLib\Connection\AMQPLazyConnection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'PhpAmqpLib'.\DIRECTORY_SEPARATOR.'Channel'.\DIRECTORY_SEPARATOR.'AbstractChannel.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'PhpAmqpLib'.\DIRECTORY_SEPARATOR.'Connection'.\DIRECTORY_SEPARATOR.'AbstractConnection.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'PhpAmqpLib'.\DIRECTORY_SEPARATOR.'Connection'.\DIRECTORY_SEPARATOR.'AMQPStreamConnection.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'PhpAmqpLib'.\DIRECTORY_SEPARATOR.'Connection'.\DIRECTORY_SEPARATOR.'AMQPLazyConnection.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'rabbitmq-bundle'.\DIRECTORY_SEPARATOR.'RabbitMq'.\DIRECTORY_SEPARATOR.'AMQPConnectionFactory.php';

        return $container->services['old_sound_rabbit_mq.connection.default'] = (new \OldSound\RabbitMqBundle\RabbitMq\AMQPConnectionFactory('PhpAmqpLib\\Connection\\AMQPLazyConnection', ['host' => '127.0.0.1', 'port' => 5672, 'user' => 'guest', 'password' => 'guest', 'vhost' => '/', 'lazy' => true, 'url' => '', 'hosts' => [], 'connection_timeout' => 3, 'read_write_timeout' => 3, 'use_socket' => false, 'ssl_context' => [], 'keepalive' => false, 'heartbeat' => 0]))->createConnection();
    }
}
