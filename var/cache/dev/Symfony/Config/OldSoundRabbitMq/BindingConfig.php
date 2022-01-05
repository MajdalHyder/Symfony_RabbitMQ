<?php

namespace Symfony\Config\OldSoundRabbitMq;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class BindingConfig 
{
    private $connection;
    private $exchange;
    private $destination;
    private $routingKey;
    private $nowait;
    private $destinationIsExchange;
    private $arguments;
    private $class;
    
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
    public function exchange($value): self
    {
        $this->exchange = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function destination($value): self
    {
        $this->destination = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function routingKey($value): self
    {
        $this->routingKey = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function nowait($value): self
    {
        $this->nowait = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function destinationIsExchange($value): self
    {
        $this->destinationIsExchange = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function arguments($value = NULL): self
    {
        $this->arguments = $value;
    
        return $this;
    }
    
    /**
     * @default '%old_sound_rabbit_mq.binding.class%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function class($value): self
    {
        $this->class = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['connection'])) {
            $this->connection = $value['connection'];
            unset($value['connection']);
        }
    
        if (isset($value['exchange'])) {
            $this->exchange = $value['exchange'];
            unset($value['exchange']);
        }
    
        if (isset($value['destination'])) {
            $this->destination = $value['destination'];
            unset($value['destination']);
        }
    
        if (isset($value['routing_key'])) {
            $this->routingKey = $value['routing_key'];
            unset($value['routing_key']);
        }
    
        if (isset($value['nowait'])) {
            $this->nowait = $value['nowait'];
            unset($value['nowait']);
        }
    
        if (isset($value['destination_is_exchange'])) {
            $this->destinationIsExchange = $value['destination_is_exchange'];
            unset($value['destination_is_exchange']);
        }
    
        if (isset($value['arguments'])) {
            $this->arguments = $value['arguments'];
            unset($value['arguments']);
        }
    
        if (isset($value['class'])) {
            $this->class = $value['class'];
            unset($value['class']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->connection) {
            $output['connection'] = $this->connection;
        }
        if (null !== $this->exchange) {
            $output['exchange'] = $this->exchange;
        }
        if (null !== $this->destination) {
            $output['destination'] = $this->destination;
        }
        if (null !== $this->routingKey) {
            $output['routing_key'] = $this->routingKey;
        }
        if (null !== $this->nowait) {
            $output['nowait'] = $this->nowait;
        }
        if (null !== $this->destinationIsExchange) {
            $output['destination_is_exchange'] = $this->destinationIsExchange;
        }
        if (null !== $this->arguments) {
            $output['arguments'] = $this->arguments;
        }
        if (null !== $this->class) {
            $output['class'] = $this->class;
        }
    
        return $output;
    }

}
