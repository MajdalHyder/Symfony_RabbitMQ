<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'ConnectionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'BindingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'ProducerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'ConsumerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'MultipleConsumerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'DynamicConsumerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'BatchConsumersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'AnonConsumerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'RpcClientConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OldSoundRabbitMq'.\DIRECTORY_SEPARATOR.'RpcServerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class OldSoundRabbitMqConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $debug;
    private $enableCollector;
    private $sandbox;
    private $connections;
    private $bindings;
    private $producers;
    private $consumers;
    private $multipleConsumers;
    private $dynamicConsumers;
    private $batchConsumers;
    private $anonConsumers;
    private $rpcClients;
    private $rpcServers;
    
    /**
     * @default '%kernel.debug%'
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debug($value): self
    {
        $this->debug = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableCollector($value): self
    {
        $this->enableCollector = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sandbox($value): self
    {
        $this->sandbox = $value;
    
        return $this;
    }
    
    public function connection(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\ConnectionConfig
    {
        if (!isset($this->connections[$key])) {
            return $this->connections[$key] = new \Symfony\Config\OldSoundRabbitMq\ConnectionConfig($value);
        }
        if ([] === $value) {
            return $this->connections[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "connection()" has already been initialized. You cannot pass values the second time you call connection().');
    }
    
    public function binding(array $value = []): \Symfony\Config\OldSoundRabbitMq\BindingConfig
    {
        return $this->bindings[] = new \Symfony\Config\OldSoundRabbitMq\BindingConfig($value);
    }
    
    public function producer(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\ProducerConfig
    {
        if (!isset($this->producers[$key])) {
            return $this->producers[$key] = new \Symfony\Config\OldSoundRabbitMq\ProducerConfig($value);
        }
        if ([] === $value) {
            return $this->producers[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "producer()" has already been initialized. You cannot pass values the second time you call producer().');
    }
    
    public function consumer(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\ConsumerConfig
    {
        if (!isset($this->consumers[$key])) {
            return $this->consumers[$key] = new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig($value);
        }
        if ([] === $value) {
            return $this->consumers[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "consumer()" has already been initialized. You cannot pass values the second time you call consumer().');
    }
    
    public function multipleConsumer(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig
    {
        if (!isset($this->multipleConsumers[$key])) {
            return $this->multipleConsumers[$key] = new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig($value);
        }
        if ([] === $value) {
            return $this->multipleConsumers[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "multipleConsumer()" has already been initialized. You cannot pass values the second time you call multipleConsumer().');
    }
    
    public function dynamicConsumer(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\DynamicConsumerConfig
    {
        if (!isset($this->dynamicConsumers[$key])) {
            return $this->dynamicConsumers[$key] = new \Symfony\Config\OldSoundRabbitMq\DynamicConsumerConfig($value);
        }
        if ([] === $value) {
            return $this->dynamicConsumers[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "dynamicConsumer()" has already been initialized. You cannot pass values the second time you call dynamicConsumer().');
    }
    
    public function batchConsumers(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\BatchConsumersConfig
    {
        if (!isset($this->batchConsumers[$key])) {
            return $this->batchConsumers[$key] = new \Symfony\Config\OldSoundRabbitMq\BatchConsumersConfig($value);
        }
        if ([] === $value) {
            return $this->batchConsumers[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "batchConsumers()" has already been initialized. You cannot pass values the second time you call batchConsumers().');
    }
    
    public function anonConsumer(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\AnonConsumerConfig
    {
        if (!isset($this->anonConsumers[$key])) {
            return $this->anonConsumers[$key] = new \Symfony\Config\OldSoundRabbitMq\AnonConsumerConfig($value);
        }
        if ([] === $value) {
            return $this->anonConsumers[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "anonConsumer()" has already been initialized. You cannot pass values the second time you call anonConsumer().');
    }
    
    public function rpcClient(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\RpcClientConfig
    {
        if (!isset($this->rpcClients[$key])) {
            return $this->rpcClients[$key] = new \Symfony\Config\OldSoundRabbitMq\RpcClientConfig($value);
        }
        if ([] === $value) {
            return $this->rpcClients[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "rpcClient()" has already been initialized. You cannot pass values the second time you call rpcClient().');
    }
    
    public function rpcServer(string $key, array $value = []): \Symfony\Config\OldSoundRabbitMq\RpcServerConfig
    {
        if (!isset($this->rpcServers[$key])) {
            return $this->rpcServers[$key] = new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig($value);
        }
        if ([] === $value) {
            return $this->rpcServers[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "rpcServer()" has already been initialized. You cannot pass values the second time you call rpcServer().');
    }
    
    public function getExtensionAlias(): string
    {
        return 'old_sound_rabbit_mq';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['debug'])) {
            $this->debug = $value['debug'];
            unset($value['debug']);
        }
    
        if (isset($value['enable_collector'])) {
            $this->enableCollector = $value['enable_collector'];
            unset($value['enable_collector']);
        }
    
        if (isset($value['sandbox'])) {
            $this->sandbox = $value['sandbox'];
            unset($value['sandbox']);
        }
    
        if (isset($value['connections'])) {
            $this->connections = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\ConnectionConfig($v); }, $value['connections']);
            unset($value['connections']);
        }
    
        if (isset($value['bindings'])) {
            $this->bindings = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\BindingConfig($v); }, $value['bindings']);
            unset($value['bindings']);
        }
    
        if (isset($value['producers'])) {
            $this->producers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\ProducerConfig($v); }, $value['producers']);
            unset($value['producers']);
        }
    
        if (isset($value['consumers'])) {
            $this->consumers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\ConsumerConfig($v); }, $value['consumers']);
            unset($value['consumers']);
        }
    
        if (isset($value['multiple_consumers'])) {
            $this->multipleConsumers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\MultipleConsumerConfig($v); }, $value['multiple_consumers']);
            unset($value['multiple_consumers']);
        }
    
        if (isset($value['dynamic_consumers'])) {
            $this->dynamicConsumers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\DynamicConsumerConfig($v); }, $value['dynamic_consumers']);
            unset($value['dynamic_consumers']);
        }
    
        if (isset($value['batch_consumers'])) {
            $this->batchConsumers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\BatchConsumersConfig($v); }, $value['batch_consumers']);
            unset($value['batch_consumers']);
        }
    
        if (isset($value['anon_consumers'])) {
            $this->anonConsumers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\AnonConsumerConfig($v); }, $value['anon_consumers']);
            unset($value['anon_consumers']);
        }
    
        if (isset($value['rpc_clients'])) {
            $this->rpcClients = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\RpcClientConfig($v); }, $value['rpc_clients']);
            unset($value['rpc_clients']);
        }
    
        if (isset($value['rpc_servers'])) {
            $this->rpcServers = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\RpcServerConfig($v); }, $value['rpc_servers']);
            unset($value['rpc_servers']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->debug) {
            $output['debug'] = $this->debug;
        }
        if (null !== $this->enableCollector) {
            $output['enable_collector'] = $this->enableCollector;
        }
        if (null !== $this->sandbox) {
            $output['sandbox'] = $this->sandbox;
        }
        if (null !== $this->connections) {
            $output['connections'] = array_map(function ($v) { return $v->toArray(); }, $this->connections);
        }
        if (null !== $this->bindings) {
            $output['bindings'] = array_map(function ($v) { return $v->toArray(); }, $this->bindings);
        }
        if (null !== $this->producers) {
            $output['producers'] = array_map(function ($v) { return $v->toArray(); }, $this->producers);
        }
        if (null !== $this->consumers) {
            $output['consumers'] = array_map(function ($v) { return $v->toArray(); }, $this->consumers);
        }
        if (null !== $this->multipleConsumers) {
            $output['multiple_consumers'] = array_map(function ($v) { return $v->toArray(); }, $this->multipleConsumers);
        }
        if (null !== $this->dynamicConsumers) {
            $output['dynamic_consumers'] = array_map(function ($v) { return $v->toArray(); }, $this->dynamicConsumers);
        }
        if (null !== $this->batchConsumers) {
            $output['batch_consumers'] = array_map(function ($v) { return $v->toArray(); }, $this->batchConsumers);
        }
        if (null !== $this->anonConsumers) {
            $output['anon_consumers'] = array_map(function ($v) { return $v->toArray(); }, $this->anonConsumers);
        }
        if (null !== $this->rpcClients) {
            $output['rpc_clients'] = array_map(function ($v) { return $v->toArray(); }, $this->rpcClients);
        }
        if (null !== $this->rpcServers) {
            $output['rpc_servers'] = array_map(function ($v) { return $v->toArray(); }, $this->rpcServers);
        }
    
        return $output;
    }

}
