<?php

namespace Container6tYzPFa;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf4f15 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeredb47 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties52044 = [
        
    ];

    public function getConnection()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getConnection', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getMetadataFactory', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getExpressionBuilder', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'beginTransaction', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getCache', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getCache();
    }

    public function transactional($func)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'transactional', array('func' => $func), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->transactional($func);
    }

    public function commit()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'commit', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->commit();
    }

    public function rollback()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'rollback', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getClassMetadata', array('className' => $className), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'createQuery', array('dql' => $dql), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'createNamedQuery', array('name' => $name), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'createQueryBuilder', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'flush', array('entity' => $entity), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'clear', array('entityName' => $entityName), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->clear($entityName);
    }

    public function close()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'close', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->close();
    }

    public function persist($entity)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'persist', array('entity' => $entity), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'remove', array('entity' => $entity), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'refresh', array('entity' => $entity), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'detach', array('entity' => $entity), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'merge', array('entity' => $entity), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getRepository', array('entityName' => $entityName), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'contains', array('entity' => $entity), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getEventManager', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getConfiguration', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'isOpen', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getUnitOfWork', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getProxyFactory', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'initializeObject', array('obj' => $obj), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'getFilters', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'isFiltersStateClean', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'hasFilters', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return $this->valueHolderf4f15->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializeredb47 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf4f15) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf4f15 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf4f15->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, '__get', ['name' => $name], $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        if (isset(self::$publicProperties52044[$name])) {
            return $this->valueHolderf4f15->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4f15;

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

        $targetObject = $this->valueHolderf4f15;
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
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4f15;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf4f15;
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
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, '__isset', array('name' => $name), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4f15;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf4f15;
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
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, '__unset', array('name' => $name), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4f15;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf4f15;
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
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, '__clone', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        $this->valueHolderf4f15 = clone $this->valueHolderf4f15;
    }

    public function __sleep()
    {
        $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, '__sleep', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;

        return array('valueHolderf4f15');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeredb47 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeredb47;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeredb47 && ($this->initializeredb47->__invoke($valueHolderf4f15, $this, 'initializeProxy', array(), $this->initializeredb47) || 1) && $this->valueHolderf4f15 = $valueHolderf4f15;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf4f15;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf4f15;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
