<?php

namespace ContainerOFu2wWx;

include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/Debug/OverrideHandler.php';
class OverrideHandler_fb58919 extends \Pimcore\Targeting\Debug\OverrideHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder068ef = null;
    private $initializerde017 = null;
    private static $publicPropertiesbdb4d = [
        
    ];
    public function getForm(\Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\Form\FormInterface
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getForm', array('request' => $request), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
        return $this->valueHolder068ef->getForm($request);
    }
    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'handleRequest', array('request' => $request), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
        return $this->valueHolder068ef->handleRequest($request);
    }
    public function handleForm(\Symfony\Component\Form\FormInterface $form, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'handleForm', array('form' => $form, 'request' => $request), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
        return $this->valueHolder068ef->handleForm($form, $request);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $instance, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($instance);
        $instance->initializerde017 = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, $overrideHandlers)
    {
        static $reflection;
        if (! $this->valueHolder068ef) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
            $this->valueHolder068ef = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);
        }
        $this->valueHolder068ef->__construct($formFactory, $overrideHandlers);
    }
    public function & __get($name)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, '__get', ['name' => $name], $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
        if (isset(self::$publicPropertiesbdb4d[$name])) {
            return $this->valueHolder068ef->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
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
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
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
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
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
        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
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
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);
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

if (!\class_exists('OverrideHandler_fb58919', false)) {
    \class_alias(__NAMESPACE__.'\\OverrideHandler_fb58919', 'OverrideHandler_fb58919', false);
}
