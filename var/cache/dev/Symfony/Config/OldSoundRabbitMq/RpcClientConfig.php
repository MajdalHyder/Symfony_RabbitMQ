<?php

namespace Symfony\Config\OldSoundRabbitMq;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class RpcClientConfig 
{
    private $connection;
    private $expectSerializedResponse;
    private $unserializer;
    private $lazy;
    private $directReplyTo;
    
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
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function expectSerializedResponse($value): self
    {
        $this->expectSerializedResponse = $value;
    
        return $this;
    }
    
    /**
     * @default 'unserialize'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function unserializer($value): self
    {
        $this->unserializer = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function lazy($value): self
    {
        $this->lazy = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function directReplyTo($value): self
    {
        $this->directReplyTo = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['connection'])) {
            $this->connection = $value['connection'];
            unset($value['connection']);
        }
    
        if (isset($value['expect_serialized_response'])) {
            $this->expectSerializedResponse = $value['expect_serialized_response'];
            unset($value['expect_serialized_response']);
        }
    
        if (isset($value['unserializer'])) {
            $this->unserializer = $value['unserializer'];
            unset($value['unserializer']);
        }
    
        if (isset($value['lazy'])) {
            $this->lazy = $value['lazy'];
            unset($value['lazy']);
        }
    
        if (isset($value['direct_reply_to'])) {
            $this->directReplyTo = $value['direct_reply_to'];
            unset($value['direct_reply_to']);
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
        if (null !== $this->expectSerializedResponse) {
            $output['expect_serialized_response'] = $this->expectSerializedResponse;
        }
        if (null !== $this->unserializer) {
            $output['unserializer'] = $this->unserializer;
        }
        if (null !== $this->lazy) {
            $output['lazy'] = $this->lazy;
        }
        if (null !== $this->directReplyTo) {
            $output['direct_reply_to'] = $this->directReplyTo;
        }
    
        return $output;
    }

}
