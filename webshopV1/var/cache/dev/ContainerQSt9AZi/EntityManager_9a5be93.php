<?php

namespace ContainerQSt9AZi;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0ff97 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerde375 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7c85a = [
        
    ];

    public function getConnection()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getConnection', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getMetadataFactory', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getExpressionBuilder', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'beginTransaction', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getCache', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getCache();
    }

    public function transactional($func)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'transactional', array('func' => $func), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->transactional($func);
    }

    public function commit()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'commit', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->commit();
    }

    public function rollback()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'rollback', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getClassMetadata', array('className' => $className), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'createQuery', array('dql' => $dql), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'createNamedQuery', array('name' => $name), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'createQueryBuilder', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'flush', array('entity' => $entity), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'clear', array('entityName' => $entityName), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->clear($entityName);
    }

    public function close()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'close', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->close();
    }

    public function persist($entity)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'persist', array('entity' => $entity), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'remove', array('entity' => $entity), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'refresh', array('entity' => $entity), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'detach', array('entity' => $entity), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'merge', array('entity' => $entity), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getRepository', array('entityName' => $entityName), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'contains', array('entity' => $entity), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getEventManager', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getConfiguration', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'isOpen', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getUnitOfWork', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getProxyFactory', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'initializeObject', array('obj' => $obj), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'getFilters', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'isFiltersStateClean', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'hasFilters', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return $this->valueHolder0ff97->hasFilters();
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

        $instance->initializerde375 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0ff97) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0ff97 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0ff97->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, '__get', ['name' => $name], $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        if (isset(self::$publicProperties7c85a[$name])) {
            return $this->valueHolder0ff97->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ff97;

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

        $targetObject = $this->valueHolder0ff97;
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
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ff97;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0ff97;
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
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, '__isset', array('name' => $name), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ff97;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0ff97;
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
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, '__unset', array('name' => $name), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ff97;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0ff97;
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
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, '__clone', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        $this->valueHolder0ff97 = clone $this->valueHolder0ff97;
    }

    public function __sleep()
    {
        $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, '__sleep', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;

        return array('valueHolder0ff97');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerde375 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerde375;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerde375 && ($this->initializerde375->__invoke($valueHolder0ff97, $this, 'initializeProxy', array(), $this->initializerde375) || 1) && $this->valueHolder0ff97 = $valueHolder0ff97;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0ff97;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0ff97;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
