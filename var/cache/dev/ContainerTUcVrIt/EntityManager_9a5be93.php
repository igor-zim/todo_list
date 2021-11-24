<?php

namespace ContainerTUcVrIt;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder91d72 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc7068 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb197e = [
        
    ];

    public function getConnection()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getConnection', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getMetadataFactory', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getExpressionBuilder', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'beginTransaction', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getCache', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'transactional', array('func' => $func), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'commit', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->commit();
    }

    public function rollback()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'rollback', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getClassMetadata', array('className' => $className), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'createQuery', array('dql' => $dql), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'createNamedQuery', array('name' => $name), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'createQueryBuilder', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'flush', array('entity' => $entity), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'clear', array('entityName' => $entityName), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->clear($entityName);
    }

    public function close()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'close', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->close();
    }

    public function persist($entity)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'persist', array('entity' => $entity), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'remove', array('entity' => $entity), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'refresh', array('entity' => $entity), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'detach', array('entity' => $entity), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'merge', array('entity' => $entity), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'contains', array('entity' => $entity), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getEventManager', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getConfiguration', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'isOpen', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getUnitOfWork', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getProxyFactory', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'initializeObject', array('obj' => $obj), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'getFilters', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'isFiltersStateClean', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'hasFilters', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return $this->valueHolder91d72->hasFilters();
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

        $instance->initializerc7068 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder91d72) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder91d72 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder91d72->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, '__get', ['name' => $name], $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        if (isset(self::$publicPropertiesb197e[$name])) {
            return $this->valueHolder91d72->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91d72;

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

        $targetObject = $this->valueHolder91d72;
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
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91d72;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder91d72;
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
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, '__isset', array('name' => $name), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91d72;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder91d72;
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
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, '__unset', array('name' => $name), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91d72;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder91d72;
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
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, '__clone', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        $this->valueHolder91d72 = clone $this->valueHolder91d72;
    }

    public function __sleep()
    {
        $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, '__sleep', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;

        return array('valueHolder91d72');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc7068 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc7068;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc7068 && ($this->initializerc7068->__invoke($valueHolder91d72, $this, 'initializeProxy', array(), $this->initializerc7068) || 1) && $this->valueHolder91d72 = $valueHolder91d72;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder91d72;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder91d72;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
