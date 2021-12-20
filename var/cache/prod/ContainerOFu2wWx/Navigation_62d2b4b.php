<?php

namespace ContainerOFu2wWx;

include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';
class Navigation_62d2b4b extends \Pimcore\Twig\Extension\Templating\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder068ef = null;
    private $initializerde017 = null;
    private static $publicPropertiesbdb4d = [
        
    ];
    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'build', array('params' => $params), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
        return $this->valueHolder068ef->build($params);
    }
    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getRenderer', array('alias' => $alias), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
        return $this->valueHolder068ef->getRenderer($alias);
    }
    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
        return $this->valueHolder068ef->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }
    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
        return $this->valueHolder068ef->__call($method, $arguments);
    }
    public function setCharset(string $charset)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'setCharset', array('charset' => $charset), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
        return $this->valueHolder068ef->setCharset($charset);
    }
    public function getCharset()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getCharset', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
        return $this->valueHolder068ef->getCharset();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->charset);
        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $instance, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($instance);
        $instance->initializerde017 = $initializer;
        return $instance;
    }
    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;
        if (! $this->valueHolder068ef) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
            $this->valueHolder068ef = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);
        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);
        }
        $this->valueHolder068ef->__construct($builder, $rendererLocator);
    }
    public function & __get($name)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, '__get', ['name' => $name], $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
        if (isset(self::$publicPropertiesbdb4d[$name])) {
            return $this->valueHolder068ef->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
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
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
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
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
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
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
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
        unset($this->charset);
        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);
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
}

if (!\class_exists('Navigation_62d2b4b', false)) {
    \class_alias(__NAMESPACE__.'\\Navigation_62d2b4b', 'Navigation_62d2b4b', false);
}
