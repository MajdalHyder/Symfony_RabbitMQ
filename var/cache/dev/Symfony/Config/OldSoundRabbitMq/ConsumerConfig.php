<?php

namespace Symfony\Config\OldSoundRabbitMq;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ConsumerConfig'.\DIRECTORY_SEPARATOR.'ExchangeOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConsumerConfig'.\DIRECTORY_SEPARATOR.'QueueOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConsumerConfig'.\DIRECTORY_SEPARATOR.'GracefulMaxExecutionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConsumerConfig'.\DIRECTORY_SEPARATOR.'QosOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 */
class ConsumerConfig 
{
    private $exchangeOptions;
    private $queueOptions;
    private $connection;
    private $callback;
    private $idleTimeout;
    private $idleTimeoutExitCode;
    private $timeoutWait;
    private $gracefulMaxExecution;
    private $autoSetupFabric;
    private $qosOptions;
    private $enableLogger;
    
    public function exchangeOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\ExchangeOptionsConfig
    {
        if (null === $this->exchangeOptions) {
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\ExchangeOptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "exchangeOptions()" has already been initialized. You cannot pass values the second time you call exchangeOptions().');
        }
    
        return $this->exchangeOptions;
    }
    
    public function queueOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\QueueOptionsConfig
    {
        if (null === $this->queueOptions) {
            $this->queueOptions = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\QueueOptionsConfig($value);
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
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function idleTimeout($value): self
    {
        $this->idleTimeout = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function idleTimeoutExitCode($value): self
    {
        $this->idleTimeoutExitCode = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function timeoutWait($value): self
    {
        $this->timeoutWait = $value;
    
        return $this;
    }
    
    public function gracefulMaxExecution(array $value = []): \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\GracefulMaxExecutionConfig
    {
        if (null === $this->gracefulMaxExecution) {
            $this->gracefulMaxExecution = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\GracefulMaxExecutionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "gracefulMaxExecution()" has already been initialized. You cannot pass values the second time you call gracefulMaxExecution().');
        }
    
        return $this->gracefulMaxExecution;
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
    
    public function qosOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\QosOptionsConfig
    {
        if (null === $this->qosOptions) {
            $this->qosOptions = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\QosOptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "qosOptions()" has already been initialized. You cannot pass values the second time you call qosOptions().');
        }
    
        return $this->qosOptions;
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
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\ExchangeOptionsConfig($value['exchange_options']);
            unset($value['exchange_options']);
        }
    
        if (isset($value['queue_options'])) {
            $this->queueOptions = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\QueueOptionsConfig($value['queue_options']);
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
    
        if (isset($value['idle_timeout'])) {
            $this->idleTimeout = $value['idle_timeout'];
            unset($value['idle_timeout']);
        }
    
        if (isset($value['idle_timeout_exit_code'])) {
            $this->idleTimeoutExitCode = $value['idle_timeout_exit_code'];
            unset($value['idle_timeout_exit_code']);
        }
    
        if (isset($value['timeout_wait'])) {
            $this->timeoutWait = $value['timeout_wait'];
            unset($value['timeout_wait']);
        }
    
        if (isset($value['graceful_max_execution'])) {
            $this->gracefulMaxExecution = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\GracefulMaxExecutionConfig($value['graceful_max_execution']);
            unset($value['graceful_max_execution']);
        }
    
        if (isset($value['auto_setup_fabric'])) {
            $this->autoSetupFabric = $value['auto_setup_fabric'];
            unset($value['auto_setup_fabric']);
        }
    
        if (isset($value['qos_options'])) {
            $this->qosOptions = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig\QosOptionsConfig($value['qos_options']);
            unset($value['qos_options']);
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
        if (null !== $this->idleTimeout) {
            $output['idle_timeout'] = $this->idleTimeout;
        }
        if (null !== $this->idleTimeoutExitCode) {
            $output['idle_timeout_exit_code'] = $this->idleTimeoutExitCode;
        }
        if (null !== $this->timeoutWait) {
            $output['timeout_wait'] = $this->timeoutWait;
        }
        if (null !== $this->gracefulMaxExecution) {
            $output['graceful_max_execution'] = $this->gracefulMaxExecution->toArray();
        }
        if (null !== $this->autoSetupFabric) {
            $output['auto_setup_fabric'] = $this->autoSetupFabric;
        }
        if (null !== $this->qosOptions) {
            $output['qos_options'] = $this->qosOptions->toArray();
        }
        if (null !== $this->enableLogger) {
            $output['enable_logger'] = $this->enableLogger;
        }
    
        return $output;
    }

}
