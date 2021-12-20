<?php

namespace ContainerOFu2wWx;

include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/TwoFactorFormRendererInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/DefaultTwoFactorFormRenderer.php';
class DefaultTwoFactorFormRenderer_892ae3f extends \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder068ef = null;
    private $initializerde017 = null;
    private static $publicPropertiesbdb4d = [
        
    ];
    public function renderForm(\Symfony\Component\HttpFoundation\Request $request, array $templateVars) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'renderForm', array('request' => $request, 'templateVars' => $templateVars), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
        return $this->valueHolder068ef->renderForm($request, $templateVars);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer $instance) {
            unset($instance->twigEnvironment, $instance->template, $instance->templateVars);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer')->__invoke($instance);
        $instance->initializerde017 = $initializer;
        return $instance;
    }
    public function __construct(\Twig\Environment $twigRenderer, string $template, array $templateVars = [])
    {
        static $reflection;
        if (! $this->valueHolder068ef) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer');
            $this->valueHolder068ef = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer $instance) {
            unset($instance->twigEnvironment, $instance->template, $instance->templateVars);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer')->__invoke($this);
        }
        $this->valueHolder068ef->__construct($twigRenderer, $template, $templateVars);
    }
    public function & __get($name)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, '__get', ['name' => $name], $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;
        if (isset(self::$publicPropertiesbdb4d[$name])) {
            return $this->valueHolder068ef->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer');
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
        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer');
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
        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer');
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
        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer');
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
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer $instance) {
            unset($instance->twigEnvironment, $instance->template, $instance->templateVars);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\DefaultTwoFactorFormRenderer')->__invoke($this);
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

if (!\class_exists('DefaultTwoFactorFormRenderer_892ae3f', false)) {
    \class_alias(__NAMESPACE__.'\\DefaultTwoFactorFormRenderer_892ae3f', 'DefaultTwoFactorFormRenderer_892ae3f', false);
}
