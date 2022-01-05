<?php

namespace Symfony\Config\OldSoundRabbitMq\ConsumerConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ExchangeOptionsConfig 
{
    private $name;
    private $type;
    private $passive;
    private $durable;
    private $autoDelete;
    private $internal;
    private $nowait;
    private $declare;
    private $arguments;
    private $ticket;
    
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
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): self
    {
        $this->type = $value;
    
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
    public function internal($value): self
    {
        $this->internal = $value;
    
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
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['name'])) {
            $this->name = $value['name'];
            unset($value['name']);
        }
    
        if (isset($value['type'])) {
            $this->type = $value['type'];
            unset($value['type']);
        }
    
        if (isset($value['passive'])) {
            $this->passive = $value['passive'];
            unset($value['passive']);
        }
    
        if (isset($value['durable'])) {
            $this->durable = $value['durable'];
            unset($value['durable']);
        }
    
        if (isset($value['auto_delete'])) {
            $this->autoDelete = $value['auto_delete'];
            unset($value['auto_delete']);
        }
    
        if (isset($value['internal'])) {
            $this->internal = $value['internal'];
            unset($value['internal']);
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
        if (null !== $this->type) {
            $output['type'] = $this->type;
        }
        if (null !== $this->passive) {
            $output['passive'] = $this->passive;
        }
        if (null !== $this->durable) {
            $output['durable'] = $this->durable;
        }
        if (null !== $this->autoDelete) {
            $output['auto_delete'] = $this->autoDelete;
        }
        if (null !== $this->internal) {
            $output['internal'] = $this->internal;
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
    
        return $output;
    }

}
