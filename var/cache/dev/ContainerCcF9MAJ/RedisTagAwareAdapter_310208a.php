<?php

namespace ContainerCcF9MAJ;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
     */
    private $valueHolder068ef = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerde017 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbdb4d = [
        
    ];

    public function commit() : bool
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'commit', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'deleteItems', array('keys' => $keys), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'invalidateTags', array('tags' => $tags), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'hasItem', array('key' => $key), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'clear', array('prefix' => $prefix), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'deleteItem', array('key' => $key), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getItem', array('key' => $key), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getItems', array('keys' => $keys), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'save', array('item' => $item), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'saveDeferred', array('item' => $item), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'enableVersioning', array('enable' => $enable), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'reset', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'setLogger', array('logger' => $logger), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'delete', array('key' => $key), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->delete($key);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->maxIdLength, $instance->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->redis, $instance->marshaller);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($instance);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($instance);

        $instance->initializerde017 = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolder068ef) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolder068ef = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolder068ef->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, '__get', ['name' => $name], $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        if (isset(self::$publicPropertiesbdb4d[$name])) {
            return $this->valueHolder068ef->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder068ef;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder068ef;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder068ef;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder068ef;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, '__isset', array('name' => $name), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder068ef;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder068ef;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, '__unset', array('name' => $name), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder068ef;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder068ef;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, '__clone', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        $this->valueHolder068ef = clone $this->valueHolder068ef;
    }

    public function __sleep()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, '__sleep', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return array('valueHolder068ef');
    }

    public function __wakeup()
    {
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerde017 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerde017;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'initializeProxy', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder068ef;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder068ef;
    }

    public function __destruct()
    {
        $this->initializerde017 || $this->valueHolder068ef->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
