<?php

namespace Symfony\Config\OldSoundRabbitMq;

require_once __DIR__.\DIRECTORY_SEPARATOR.'RpcServerConfig'.\DIRECTORY_SEPARATOR.'ExchangeOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RpcServerConfig'.\DIRECTORY_SEPARATOR.'QueueOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RpcServerConfig'.\DIRECTORY_SEPARATOR.'QosOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 */
class RpcServerConfig 
{
    private $exchangeOptions;
    private $queueOptions;
    private $connection;
    private $callback;
    private $qosOptions;
    private $serializer;
    private $enableLogger;
    
    public function exchangeOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\ExchangeOptionsConfig
    {
        if (null === $this->exchangeOptions) {
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\ExchangeOptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "exchangeOptions()" has already been initialized. You cannot pass values the second time you call exchangeOptions().');
        }
    
        return $this->exchangeOptions;
    }
    
    public function queueOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\QueueOptionsConfig
    {
        if (null === $this->queueOptions) {
            $this->queueOptions = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\QueueOptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "queueOptions()" has already been initialized. You cannot pass values the second time you call queueOptions().');
        }
    
        return $this->queueOptions;
    }
    
    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connection($value): self
    {
        $this->connection = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function callback($value): self
    {
        $this->callback = $value;
    
        return $this;
    }
    
    public function qosOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\QosOptionsConfig
    {
        if (null === $this->qosOptions) {
            $this->qosOptions = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\QosOptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "qosOptions()" has already been initialized. You cannot pass values the second time you call qosOptions().');
        }
    
        return $this->qosOptions;
    }
    
    /**
     * @default 'serialize'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serializer($value): self
    {
        $this->serializer = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enableLogger($value): self
    {
        $this->enableLogger = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['exchange_options'])) {
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\ExchangeOptionsConfig($value['exchange_options']);
            unset($value['exchange_options']);
        }
    
        if (isset($value['queue_options'])) {
            $this->queueOptions = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\QueueOptionsConfig($value['queue_options']);
            unset($value['queue_options']);
        }
    
        if (isset($value['connection'])) {
            $this->connection = $value['connection'];
            unset($value['connection']);
        }
    
        if (isset($value['callback'])) {
            $this->callback = $value['callback'];
            unset($value['callback']);
        }
    
        if (isset($value['qos_options'])) {
            $this->qosOptions = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig\QosOptionsConfig($value['qos_options']);
            unset($value['qos_options']);
        }
    
        if (isset($value['serializer'])) {
            $this->serializer = $value['serializer'];
            unset($value['serializer']);
        }
    
        if (isset($value['enable_logger'])) {
            $this->enableLogger = $value['enable_logger'];
            unset($value['enable_logger']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->exchangeOptions) {
            $output['exchange_options'] = $this->exchangeOptions->toArray();
        }
        if (null !== $this->queueOptions) {
            $output['queue_options'] = $this->queueOptions->toArray();
        }
        if (null !== $this->connection) {
            $output['connection'] = $this->connection;
        }
        if (null !== $this->callback) {
            $output['callback'] = $this->callback;
        }
        if (null !== $this->qosOptions) {
            $output['qos_options'] = $this->qosOptions->toArray();
        }
        if (null !== $this->serializer) {
            $output['serializer'] = $this->serializer;
        }
        if (null !== $this->enableLogger) {
            $output['enable_logger'] = $this->enableLogger;
        }
    
        return $output;
    }

}
