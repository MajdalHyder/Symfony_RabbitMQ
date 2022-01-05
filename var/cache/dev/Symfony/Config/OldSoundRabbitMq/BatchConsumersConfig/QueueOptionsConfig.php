<?php

namespace Symfony\Config\OldSoundRabbitMq\BatchConsumersConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class QueueOptionsConfig 
{
    private $name;
    private $passive;
    private $durable;
    private $exclusive;
    private $autoDelete;
    private $nowait;
    private $declare;
    private $arguments;
    private $ticket;
    private $routingKeys;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): self
    {
        $this->name = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function passive($value): self
    {
        $this->passive = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function durable($value): self
    {
        $this->durable = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function exclusive($value): self
    {
        $this->exclusive = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoDelete($value): self
    {
        $this->autoDelete = $value;
    
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
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function declare($value): self
    {
        $this->declare = $value;
    
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
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ticket($value): self
    {
        $this->ticket = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function routingKeys($value): self
    {
        $this->routingKeys = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['name'])) {
            $this->name = $value['name'];
            unset($value['name']);
        }
    
        if (isset($value['passive'])) {
            $this->passive = $value['passive'];
            unset($value['passive']);
        }
    
        if (isset($value['durable'])) {
            $this->durable = $value['durable'];
            unset($value['durable']);
        }
    
        if (isset($value['exclusive'])) {
            $this->exclusive = $value['exclusive'];
            unset($value['exclusive']);
        }
    
        if (isset($value['auto_delete'])) {
            $this->autoDelete = $value['auto_delete'];
            unset($value['auto_delete']);
        }
    
        if (isset($value['nowait'])) {
            $this->nowait = $value['nowait'];
            unset($value['nowait']);
        }
    
        if (isset($value['declare'])) {
            $this->declare = $value['declare'];
            unset($value['declare']);
        }
    
        if (isset($value['arguments'])) {
            $this->arguments = $value['arguments'];
            unset($value['arguments']);
        }
    
        if (isset($value['ticket'])) {
            $this->ticket = $value['ticket'];
            unset($value['ticket']);
        }
    
        if (isset($value['routing_keys'])) {
            $this->routingKeys = $value['routing_keys'];
            unset($value['routing_keys']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->name) {
            $output['name'] = $this->name;
        }
        if (null !== $this->passive) {
            $output['passive'] = $this->passive;
        }
        if (null !== $this->durable) {
            $output['durable'] = $this->durable;
        }
        if (null !== $this->exclusive) {
            $output['exclusive'] = $this->exclusive;
        }
        if (null !== $this->autoDelete) {
            $output['auto_delete'] = $this->autoDelete;
        }
        if (null !== $this->nowait) {
            $output['nowait'] = $this->nowait;
        }
        if (null !== $this->declare) {
            $output['declare'] = $this->declare;
        }
        if (null !== $this->arguments) {
            $output['arguments'] = $this->arguments;
        }
        if (null !== $this->ticket) {
            $output['ticket'] = $this->ticket;
        }
        if (null !== $this->routingKeys) {
            $output['routing_keys'] = $this->routingKeys;
        }
    
        return $output;
    }

}
