<?php

namespace Symfony\Config\OldSoundRabbitMq;

require_once __DIR__.\DIRECTORY_SEPARATOR.'AnonConsumerConfig'.\DIRECTORY_SEPARATOR.'ExchangeOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 */
class AnonConsumerConfig 
{
    private $exchangeOptions;
    private $connection;
    private $callback;
    
    public function exchangeOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\AnonConsumerConfig\ExchangeOptionsConfig
    {
        if (null === $this->exchangeOptions) {
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\AnonConsumerConfig\ExchangeOptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "exchangeOptions()" has already been initialized. You cannot pass values the second time you call exchangeOptions().');
        }
    
        return $this->exchangeOptions;
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
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['exchange_options'])) {
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\AnonConsumerConfig\ExchangeOptionsConfig($value['exchange_options']);
            unset($value['exchange_options']);
        }
    
        if (isset($value['connection'])) {
            $this->connection = $value['connection'];
            unset($value['connection']);
        }
    
        if (isset($value['callback'])) {
            $this->callback = $value['callback'];
            unset($value['callback']);
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
        if (null !== $this->connection) {
            $output['connection'] = $this->connection;
        }
        if (null !== $this->callback) {
            $output['callback'] = $this->callback;
        }
    
        return $output;
    }

}
