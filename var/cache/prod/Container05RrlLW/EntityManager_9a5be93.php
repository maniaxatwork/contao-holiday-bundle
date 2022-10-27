<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdbe75 = null;
    private $initializer3a454 = null;
    private static $publicProperties01673 = [
        
    ];
    public function getConnection()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getConnection', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getMetadataFactory', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getExpressionBuilder', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'beginTransaction', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getCache', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getCache();
    }
    public function transactional($func)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'transactional', array('func' => $func), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'commit', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->commit();
    }
    public function rollback()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'rollback', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getClassMetadata', array('className' => $className), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'createQuery', array('dql' => $dql), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'createNamedQuery', array('name' => $name), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'createQueryBuilder', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'flush', array('entity' => $entity), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'clear', array('entityName' => $entityName), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->clear($entityName);
    }
    public function close()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'close', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->close();
    }
    public function persist($entity)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'persist', array('entity' => $entity), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'remove', array('entity' => $entity), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'refresh', array('entity' => $entity), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'detach', array('entity' => $entity), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'merge', array('entity' => $entity), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'contains', array('entity' => $entity), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getEventManager', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getConfiguration', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'isOpen', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getUnitOfWork', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getProxyFactory', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'initializeObject', array('obj' => $obj), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'getFilters', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'isFiltersStateClean', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'hasFilters', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer3a454 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolderdbe75) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdbe75 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderdbe75->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, '__get', ['name' => $name], $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        if (isset(self::$publicProperties01673[$name])) {
            return $this->valueHolderdbe75->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdbe75;
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
        $targetObject = $this->valueHolderdbe75;
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
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdbe75;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdbe75;
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
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, '__isset', array('name' => $name), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdbe75;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdbe75;
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
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, '__unset', array('name' => $name), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdbe75;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdbe75;
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
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, '__clone', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        $this->valueHolderdbe75 = clone $this->valueHolderdbe75;
    }
    public function __sleep()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, '__sleep', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return array('valueHolderdbe75');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3a454 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3a454;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'initializeProxy', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdbe75;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdbe75;
    }
}
