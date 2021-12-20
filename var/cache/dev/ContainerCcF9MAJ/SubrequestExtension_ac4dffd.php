<?php

namespace ContainerCcF9MAJ;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/SubrequestExtension.php';

class SubrequestExtension_ac4dffd extends \Pimcore\Twig\Extension\SubrequestExtension implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\SubrequestExtension|null wrapped object, if the proxy is initialized
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

    public function getFunctions()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getFunctions', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getFunctions();
    }

    public function getTokenParsers()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getTokenParsers', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getTokenParsers();
    }

    public function getNodeVisitors()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getNodeVisitors', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getNodeVisitors();
    }

    public function getFilters()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getFilters', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getFilters();
    }

    public function getTests()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getTests', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getTests();
    }

    public function getOperators()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getOperators', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getOperators();
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

        unset($instance->incHelper);

        $instance->initializerde017 = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Twig\Extension\Templating\Inc $incHelper)
    {
        static $reflection;

        if (! $this->valueHolder068ef) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');
            $this->valueHolder068ef = $reflection->newInstanceWithoutConstructor();
        unset($this->incHelper);

        }

        $this->valueHolder068ef->__construct($incHelper);
    }

    public function & __get($name)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, '__get', ['name' => $name], $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        if (isset(self::$publicPropertiesbdb4d[$name])) {
            return $this->valueHolder068ef->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\SubrequestExtension');

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
        unset($this->incHelper);
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

if (!\class_exists('SubrequestExtension_ac4dffd', false)) {
    \class_alias(__NAMESPACE__.'\\SubrequestExtension_ac4dffd', 'SubrequestExtension_ac4dffd', false);
}
