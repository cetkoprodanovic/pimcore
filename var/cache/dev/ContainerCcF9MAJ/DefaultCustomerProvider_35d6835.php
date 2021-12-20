<?php

namespace ContainerCcF9MAJ;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/CustomerProvider/CustomerProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/CustomerProvider/DefaultCustomerProvider.php';

class DefaultCustomerProvider_35d6835 extends \CustomerManagementFrameworkBundle\CustomerProvider\DefaultCustomerProvider implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \CustomerManagementFrameworkBundle\CustomerProvider\DefaultCustomerProvider|null wrapped object, if the proxy is initialized
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

    public function getCustomerClassId()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getCustomerClassId', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getCustomerClassId();
    }

    public function getCustomerClassName()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getCustomerClassName', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getCustomerClassName();
    }

    public function getList()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getList', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getList();
    }

    public function create(array $data = [])
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'create', array('data' => $data), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->create($data);
    }

    public function createCustomerInstance()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'createCustomerInstance', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->createCustomerInstance();
    }

    public function update(\CustomerManagementFrameworkBundle\Model\CustomerInterface $customer, array $data = [])
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'update', array('customer' => $customer, 'data' => $data), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->update($customer, $data);
    }

    public function delete(\CustomerManagementFrameworkBundle\Model\CustomerInterface $customer)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'delete', array('customer' => $customer), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->delete($customer);
    }

    public function getById($id, $force = false)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getById', array('id' => $id, 'force' => $force), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getById($id, $force);
    }

    public function getActiveCustomerByEmail($email)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getActiveCustomerByEmail', array('email' => $email), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getActiveCustomerByEmail($email);
    }

    public function applyObjectNamingScheme(\CustomerManagementFrameworkBundle\Model\CustomerInterface $customer)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'applyObjectNamingScheme', array('customer' => $customer), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->applyObjectNamingScheme($customer);
    }

    public function getParentParentPath()
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'getParentParentPath', array(), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->getParentParentPath();
    }

    public function setParentPath($parentPath)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'setParentPath', array('parentPath' => $parentPath), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->setParentPath($parentPath);
    }

    public function addActiveCondition($list)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'addActiveCondition', array('list' => $list), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->addActiveCondition($list);
    }

    public function addInActiveCondition($list)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, 'addInActiveCondition', array('list' => $list), $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        return $this->valueHolder068ef->addInActiveCondition($list);
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

        unset($instance->pimcoreClass, $instance->parentPath, $instance->namingScheme, $instance->modelFactory);

        $instance->initializerde017 = $initializer;

        return $instance;
    }

    public function __construct($pimcoreClass, $parentPath, \CustomerManagementFrameworkBundle\CustomerProvider\ObjectNamingScheme\ObjectNamingSchemeInterface $namingScheme, \Pimcore\Model\Factory $modelFactory)
    {
        static $reflection;

        if (! $this->valueHolder068ef) {
            $reflection = $reflection ?? new \ReflectionClass('CustomerManagementFrameworkBundle\\CustomerProvider\\DefaultCustomerProvider');
            $this->valueHolder068ef = $reflection->newInstanceWithoutConstructor();
        unset($this->pimcoreClass, $this->parentPath, $this->namingScheme, $this->modelFactory);

        }

        $this->valueHolder068ef->__construct($pimcoreClass, $parentPath, $namingScheme, $modelFactory);
    }

    public function & __get($name)
    {
        $this->initializerde017 && ($this->initializerde017->__invoke($valueHolder068ef, $this, '__get', ['name' => $name], $this->initializerde017) || 1) && $this->valueHolder068ef = $valueHolder068ef;

        if (isset(self::$publicPropertiesbdb4d[$name])) {
            return $this->valueHolder068ef->$name;
        }

        $realInstanceReflection = new \ReflectionClass('CustomerManagementFrameworkBundle\\CustomerProvider\\DefaultCustomerProvider');

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

        $realInstanceReflection = new \ReflectionClass('CustomerManagementFrameworkBundle\\CustomerProvider\\DefaultCustomerProvider');

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

        $realInstanceReflection = new \ReflectionClass('CustomerManagementFrameworkBundle\\CustomerProvider\\DefaultCustomerProvider');

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

        $realInstanceReflection = new \ReflectionClass('CustomerManagementFrameworkBundle\\CustomerProvider\\DefaultCustomerProvider');

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
        unset($this->pimcoreClass, $this->parentPath, $this->namingScheme, $this->modelFactory);
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

if (!\class_exists('DefaultCustomerProvider_35d6835', false)) {
    \class_alias(__NAMESPACE__.'\\DefaultCustomerProvider_35d6835', 'DefaultCustomerProvider_35d6835', false);
}
