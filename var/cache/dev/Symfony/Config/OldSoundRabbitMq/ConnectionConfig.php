<?php

namespace Symfony\Config\OldSoundRabbitMq;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ConnectionConfig'.\DIRECTORY_SEPARATOR.'HostsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ConnectionConfig 
{
    private $url;
    private $host;
    private $port;
    private $user;
    private $password;
    private $vhost;
    private $hosts;
    private $lazy;
    private $connectionTimeout;
    private $readWriteTimeout;
    private $useSocket;
    private $sslContext;
    private $keepalive;
    private $heartbeat;
    private $connectionParametersProvider;
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function url($value): self
    {
        $this->url = $value;
    
        return $this;
    }
    
    /**
     * @default 'localhost'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): self
    {
        $this->host = $value;
    
        return $this;
    }
    
    /**
     * @default 5672
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function port($value): self
    {
        $this->port = $value;
    
        return $this;
    }
    
    /**
     * @default 'guest'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function user($value): self
    {
        $this->user = $value;
    
        return $this;
    }
    
    /**
     * @default 'guest'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function password($value): self
    {
        $this->password = $value;
    
        return $this;
    }
    
    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function vhost($value): self
    {
        $this->vhost = $value;
    
        return $this;
    }
    
    public function hosts(array $value = []): \Symfony\Config\OldSoundRabbitMq\ConnectionConfig\HostsConfig
    {
        return $this->hosts[] = new \Symfony\Config\OldSoundRabbitMq\ConnectionConfig\HostsConfig($value);
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
     * @default 3
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connectionTimeout($value): self
    {
        $this->connectionTimeout = $value;
    
        return $this;
    }
    
    /**
     * @default 3
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function readWriteTimeout($value): self
    {
        $this->readWriteTimeout = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useSocket($value): self
    {
        $this->useSocket = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sslContext(string $key, $value): self
    {
        $this->sslContext[$key] = $value;
    
        return $this;
    }
    
    /**
     * requires php-amqplib v2.4.1+ and PHP5.4+
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function keepalive($value): self
    {
        $this->keepalive = $value;
    
        return $this;
    }
    
    /**
     * requires php-amqplib v2.4.1+
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function heartbeat($value): self
    {
        $this->heartbeat = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connectionParametersProvider($value): self
    {
        $this->connectionParametersProvider = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['url'])) {
            $this->url = $value['url'];
            unset($value['url']);
        }
    
        if (isset($value['host'])) {
            $this->host = $value['host'];
            unset($value['host']);
        }
    
        if (isset($value['port'])) {
            $this->port = $value['port'];
            unset($value['port']);
        }
    
        if (isset($value['user'])) {
            $this->user = $value['user'];
            unset($value['user']);
        }
    
        if (isset($value['password'])) {
            $this->password = $value['password'];
            unset($value['password']);
        }
    
        if (isset($value['vhost'])) {
            $this->vhost = $value['vhost'];
            unset($value['vhost']);
        }
    
        if (isset($value['hosts'])) {
            $this->hosts = array_map(function ($v) { return new \Symfony\Config\OldSoundRabbitMq\ConnectionConfig\HostsConfig($v); }, $value['hosts']);
            unset($value['hosts']);
        }
    
        if (isset($value['lazy'])) {
            $this->lazy = $value['lazy'];
            unset($value['lazy']);
        }
    
        if (isset($value['connection_timeout'])) {
            $this->connectionTimeout = $value['connection_timeout'];
            unset($value['connection_timeout']);
        }
    
        if (isset($value['read_write_timeout'])) {
            $this->readWriteTimeout = $value['read_write_timeout'];
            unset($value['read_write_timeout']);
        }
    
        if (isset($value['use_socket'])) {
            $this->useSocket = $value['use_socket'];
            unset($value['use_socket']);
        }
    
        if (isset($value['ssl_context'])) {
            $this->sslContext = $value['ssl_context'];
            unset($value['ssl_context']);
        }
    
        if (isset($value['keepalive'])) {
            $this->keepalive = $value['keepalive'];
            unset($value['keepalive']);
        }
    
        if (isset($value['heartbeat'])) {
            $this->heartbeat = $value['heartbeat'];
            unset($value['heartbeat']);
        }
    
        if (isset($value['connection_parameters_provider'])) {
            $this->connectionParametersProvider = $value['connection_parameters_provider'];
            unset($value['connection_parameters_provider']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->url) {
            $output['url'] = $this->url;
        }
        if (null !== $this->host) {
            $output['host'] = $this->host;
        }
        if (null !== $this->port) {
            $output['port'] = $this->port;
        }
        if (null !== $this->user) {
            $output['user'] = $this->user;
        }
        if (null !== $this->password) {
            $output['password'] = $this->password;
        }
        if (null !== $this->vhost) {
            $output['vhost'] = $this->vhost;
        }
        if (null !== $this->hosts) {
            $output['hosts'] = array_map(function ($v) { return $v->toArray(); }, $this->hosts);
        }
        if (null !== $this->lazy) {
            $output['lazy'] = $this->lazy;
        }
        if (null !== $this->connectionTimeout) {
            $output['connection_timeout'] = $this->connectionTimeout;
        }
        if (null !== $this->readWriteTimeout) {
            $output['read_write_timeout'] = $this->readWriteTimeout;
        }
        if (null !== $this->useSocket) {
            $output['use_socket'] = $this->useSocket;
        }
        if (null !== $this->sslContext) {
            $output['ssl_context'] = $this->sslContext;
        }
        if (null !== $this->keepalive) {
            $output['keepalive'] = $this->keepalive;
        }
        if (null !== $this->heartbeat) {
            $output['heartbeat'] = $this->heartbeat;
        }
        if (null !== $this->connectionParametersProvider) {
            $output['connection_parameters_provider'] = $this->connectionParametersProvider;
        }
    
        return $output;
    }

}
