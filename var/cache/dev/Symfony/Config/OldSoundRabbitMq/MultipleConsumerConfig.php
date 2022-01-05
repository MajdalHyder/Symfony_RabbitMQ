<?php

namespace Symfony\Config\OldSoundRabbitMq;

require_once __DIR__.\DIRECTORY_SEPARATOR.'MultipleConsumerConfig'.\DIRECTORY_SEPARATOR.'ExchangeOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MultipleConsumerConfig'.\DIRECTORY_SEPARATOR.'GracefulMaxExecutionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MultipleConsumerConfig'.\DIRECTORY_SEPARATOR.'QueuesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MultipleConsumerConfig'.\DIRECTORY_SEPARATOR.'QosOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 */
class MultipleConsumerConfig 
{
    private $exchangeOptions;
    private $connection;
    private $idleTimeout;
    private $idleTimeoutExitCode;
    private $timeoutWait;
    private $autoSetupFabric;
    private $gracefulMaxExecution;
    private $queues;
    private $qosOptions;
    private $queuesProvider;
    private $enableLogger;
    
    public function exchangeOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\ExchangeOptionsConfig
    {
        if (null === $this->exchangeOptions) {
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\ExchangeOptionsConfig($value);
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
    
    public function gracefulMaxExecution(array $value = []): \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\GracefulMaxExecutionConfig
    {
        if (null === $this->gracefulMaxExecution) {
            $this->gracefulMaxExecution = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\GracefulMaxExecutionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "gracefulMaxExecution()" has already been initialized. You cannot pass values the second time you call gracefulMaxExecution().');
        }
    
        return $this->gracefulMaxExecution;
    }
    
    public function queues(array $value = []): \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\QueuesConfig
    {
        return $this->queues[] = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\QueuesConfig($value);
    }
    
    public function qosOptions(array $value = []): \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\QosOptionsConfig
    {
        if (null === $this->qosOptions) {
            $this->qosOptions = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\QosOptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "qosOptions()" has already been initialized. You cannot pass values the second time you call qosOptions().');
        }
    
        return $this->qosOptions;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function queuesProvider($value): self
    {
        $this->queuesProvider = $value;
    
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
            $this->exchangeOptions = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\ExchangeOptionsConfig($value['exchange_options']);
            unset($value['exchange_options']);
        }
    
        if (isset($value['connection'])) {
            $this->connection = $value['connection'];
            unset($value['connection']);
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
    
        if (isset($value['auto_setup_fabric'])) {
            $this->autoSetupFabric = $value['auto_setup_fabric'];
            unset($value['auto_setup_fabric']);
        }
    
        if (isset($value['graceful_max_execution'])) {
            $this->gracefulMaxExecution = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\GracefulMaxExecutionConfig($value['graceful_max_execution']);
            unset($value['graceful_max_execution']);
        }
    
        if (isset($value['queues'])) {
            $this->queues = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\QueuesConfig($v); }, $value['queues']);
            unset($value['queues']);
        }
    
        if (isset($value['qos_options'])) {
            $this->qosOptions = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig\QosOptionsConfig($value['qos_options']);
            unset($value['qos_options']);
        }
    
        if (isset($value['queues_provider'])) {
            $this->queuesProvider = $value['queues_provider'];
            unset($value['queues_provider']);
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
        if (null !== $this->connection) {
            $output['connection'] = $this->connection;
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
        if (null !== $this->autoSetupFabric) {
            $output['auto_setup_fabric'] = $this->autoSetupFabric;
        }
        if (null !== $this->gracefulMaxExecution) {
            $output['graceful_max_execution'] = $this->gracefulMaxExecution->toArray();
        }
        if (null !== $this->queues) {
            $output['queues'] = array_map(function ($v) { return $v->toArray(); }, $this->queues);
        }
        if (null !== $this->qosOptions) {
            $output['qos_options'] = $this->qosOptions->toArray();
        }
        if (null !== $this->queuesProvider) {
            $output['queues_provider'] = $this->queuesProvider;
        }
        if (null !== $this->enableLogger) {
            $output['enable_logger'] = $this->enableLogger;
        }
    
        return $output;
    }

}
