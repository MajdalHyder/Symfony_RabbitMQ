<?php

namespace Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class GracefulMaxExecutionConfig 
{
    private $timeout;
    private $exitCode;
    
    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function timeout($value): self
    {
        $this->timeout = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function exitCode($value): self
    {
        $this->exitCode = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['timeout'])) {
            $this->timeout = $value['timeout'];
            unset($value['timeout']);
        }
    
        if (isset($value['exit_code'])) {
            $this->exitCode = $value['exit_code'];
            unset($value['exit_code']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->timeout) {
            $output['timeout'] = $this->timeout;
        }
        if (null !== $this->exitCode) {
            $output['exit_code'] = $this->exitCode;
        }
    
        return $output;
    }

}
