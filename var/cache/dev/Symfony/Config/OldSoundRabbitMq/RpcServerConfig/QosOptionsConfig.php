<?php

namespace Symfony\Config\OldSoundRabbitMq\RpcServerConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class QosOptionsConfig 
{
    private $prefetchSize;
    private $prefetchCount;
    private $global;
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function prefetchSize($value): self
    {
        $this->prefetchSize = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function prefetchCount($value): self
    {
        $this->prefetchCount = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function global($value): self
    {
        $this->global = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['prefetch_size'])) {
            $this->prefetchSize = $value['prefetch_size'];
            unset($value['prefetch_size']);
        }
    
        if (isset($value['prefetch_count'])) {
            $this->prefetchCount = $value['prefetch_count'];
            unset($value['prefetch_count']);
        }
    
        if (isset($value['global'])) {
            $this->global = $value['global'];
            unset($value['global']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->prefetchSize) {
            $output['prefetch_size'] = $this->prefetchSize;
        }
        if (null !== $this->prefetchCount) {
            $output['prefetch_count'] = $this->prefetchCount;
        }
        if (null !== $this->global) {
            $output['global'] = $this->global;
        }
    
        return $output;
    }

}
