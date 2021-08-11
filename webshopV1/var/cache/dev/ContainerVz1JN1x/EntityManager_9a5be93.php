<?php

namespace ContainerVz1JN1x;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7b720 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercff3d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd597d = [
        
    ];

    public function getConnection()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getConnection', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getMetadataFactory', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getExpressionBuilder', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'beginTransaction', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getCache', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getCache();
    }

    public function transactional($func)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'transactional', array('func' => $func), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->transactional($func);
    }

    public function commit()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'commit', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->commit();
    }

    public function rollback()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'rollback', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getClassMetadata', array('className' => $className), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'createQuery', array('dql' => $dql), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'createNamedQuery', array('name' => $name), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'createQueryBuilder', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'flush', array('entity' => $entity), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'clear', array('entityName' => $entityName), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->clear($entityName);
    }

    public function close()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'close', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->close();
    }

    public function persist($entity)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'persist', array('entity' => $entity), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'remove', array('entity' => $entity), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'refresh', array('entity' => $entity), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'detach', array('entity' => $entity), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'merge', array('entity' => $entity), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getRepository', array('entityName' => $entityName), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'contains', array('entity' => $entity), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getEventManager', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getConfiguration', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'isOpen', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getUnitOfWork', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getProxyFactory', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'initializeObject', array('obj' => $obj), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'getFilters', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'isFiltersStateClean', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'hasFilters', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return $this->valueHolder7b720->hasFilters();
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

        $instance->initializercff3d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7b720) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7b720 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7b720->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, '__get', ['name' => $name], $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        if (isset(self::$publicPropertiesd597d[$name])) {
            return $this->valueHolder7b720->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7b720;

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

        $targetObject = $this->valueHolder7b720;
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
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7b720;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7b720;
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
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, '__isset', array('name' => $name), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7b720;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7b720;
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
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, '__unset', array('name' => $name), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7b720;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7b720;
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
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, '__clone', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        $this->valueHolder7b720 = clone $this->valueHolder7b720;
    }

    public function __sleep()
    {
        $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, '__sleep', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;

        return array('valueHolder7b720');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercff3d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercff3d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercff3d && ($this->initializercff3d->__invoke($valueHolder7b720, $this, 'initializeProxy', array(), $this->initializercff3d) || 1) && $this->valueHolder7b720 = $valueHolder7b720;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7b720;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7b720;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
