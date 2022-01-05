<?php

namespace ContainerMCvFz3j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOldSoundRabbitMq_MultipleConsumerCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'old_sound_rabbit_mq.multiple_consumer_command' shared service.
     *
     * @return \OldSound\RabbitMqBundle\Command\MultipleConsumerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'rabbitmq-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'BaseRabbitMqCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'rabbitmq-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'BaseConsumerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'php-amqplib'.\DIRECTORY_SEPARATOR.'rabbitmq-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MultipleConsumerCommand.php';

        $container->privates['old_sound_rabbit_mq.multiple_consumer_command'] = $instance = new \OldSound\RabbitMqBundle\Command\MultipleConsumerCommand();

        $instance->setName('rabbitmq:multiple-consumer');

        return $instance;
    }
}
