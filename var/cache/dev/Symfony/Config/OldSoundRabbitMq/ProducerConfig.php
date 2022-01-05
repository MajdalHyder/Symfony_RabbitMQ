<?php

namespace Symfony\Config\OldSoundRabbitMq;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProducerConfig'.\DIRECTORY_SEPARATOR.'ExchangeOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ProducerConfig'.\DIRECTORY_SEPARATOR.'QueueOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 */
class ProducerConfig 
{
    private $exchangeOptions;
    private $queueOptions;
    private $connection;
    private $autoSetupFabric;
    private $class;
    private $enableLogger;
    private $serviceAlias;
    private $defaultRoutingKey;
    private $defaultContentType;
    private $defaultDeliveryMode;
    
    public function exchangeOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\ProducerConfig\ExchangeOptionsConfig
    {
        if (null === $this->exchangeOptions) {
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\ProducerConfig\ExchangeOptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "exchangeOptions()" has already been initialized. You cannot pass values the second time you call exchangeOptions().');
        }
    
        return $this->exchangeOptions;
    }
    
    public function queueOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\ProducerConfig\QueueOptionsConfig
    {
        if (null === $this->queueOptions) {
            $this->queueOptions = new \Symfony\Config\OldSoundRabbitMq\ProducerConfig\QueueOptionsConfig($value);
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
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoSetupFabric($value): self
    {
        $this->autoSetupFabric = $value;
    
        return $this;
    }
    
    /**
     * @default '%old_sound_rabbit_mq.producer.class%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function class($value): self
    {
        $this->class = $value;
    
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
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serviceAlias($value): self
    {
        $this->serviceAlias = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultRoutingKey($value): self
    {
        $this->defaultRoutingKey = $value;
    
        return $this;
    }
    
    /**
     * @default 'text/plain'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultContentType($value): self
    {
        $this->defaultContentType = $value;
    
        return $this;
    }
    
    /**
     * @default 2
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function defaultDeliveryMode($value): self
    {
        $this->defaultDeliveryMode = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['exchange_options'])) {
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\ProducerConfig\ExchangeOptionsConfig($value['exchange_options']);
            unset($value['exchange_options']);
        }
    
        if (isset($value['queue_options'])) {
            $this->queueOptions = new \Symfony\Config\OldSoundRabbitMq\ProducerConfig\QueueOptionsConfig($value['queue_options']);
            unset($value['queue_options']);
        }
    
        if (isset($value['connection'])) {
            $this->connection = $value['connection'];
            unset($value['connection']);
        }
    
        if (isset($value['auto_setup_fabric'])) {
            $this->autoSetupFabric = $value['auto_setup_fabric'];
            unset($value['auto_setup_fabric']);
        }
    
        if (isset($value['class'])) {
            $this->class = $value['class'];
            unset($value['class']);
        }
    
        if (isset($value['enable_logger'])) {
            $this->enableLogger = $value['enable_logger'];
            unset($value['enable_logger']);
        }
    
        if (isset($value['service_alias'])) {
            $this->serviceAlias = $value['service_alias'];
            unset($value['service_alias']);
        }
    
        if (isset($value['default_routing_key'])) {
            $this->defaultRoutingKey = $value['default_routing_key'];
            unset($value['default_routing_key']);
        }
    
        if (isset($value['default_content_type'])) {
            $this->defaultContentType = $value['default_content_type'];
            unset($value['default_content_type']);
        }
    
        if (isset($value['default_delivery_mode'])) {
            $this->defaultDeliveryMode = $value['default_delivery_mode'];
            unset($value['default_delivery_mode']);
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
        if (null !== $this->autoSetupFabric) {
            $output['auto_setup_fabric'] = $this->autoSetupFabric;
        }
        if (null !== $this->class) {
            $output['class'] = $this->class;
        }
        if (null !== $this->enableLogger) {
            $output['enable_logger'] = $this->enableLogger;
        }
        if (null !== $this->serviceAlias) {
            $output['service_alias'] = $this->serviceAlias;
        }
        if (null !== $this->defaultRoutingKey) {
            $output['default_routing_key'] = $this->defaultRoutingKey;
        }
        if (null !== $this->defaultContentType) {
            $output['default_content_type'] = $this->defaultContentType;
        }
        if (null !== $this->defaultDeliveryMode) {
            $output['default_delivery_mode'] = $this->defaultDeliveryMode;
        }
    
        return $output;
    }

}
