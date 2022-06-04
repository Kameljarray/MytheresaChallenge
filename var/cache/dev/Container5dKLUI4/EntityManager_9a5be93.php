<?php

namespace Container5dKLUI4;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderec4df = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer70898 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties64d8e = [
        
    ];

    public function getConnection()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getConnection', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getMetadataFactory', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getExpressionBuilder', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'beginTransaction', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getCache', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getCache();
    }

    public function transactional($func)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'transactional', array('func' => $func), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'wrapInTransaction', array('func' => $func), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'commit', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->commit();
    }

    public function rollback()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'rollback', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getClassMetadata', array('className' => $className), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'createQuery', array('dql' => $dql), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'createNamedQuery', array('name' => $name), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'createQueryBuilder', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'flush', array('entity' => $entity), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'clear', array('entityName' => $entityName), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->clear($entityName);
    }

    public function close()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'close', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->close();
    }

    public function persist($entity)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'persist', array('entity' => $entity), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'remove', array('entity' => $entity), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'refresh', array('entity' => $entity), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'detach', array('entity' => $entity), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'merge', array('entity' => $entity), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getRepository', array('entityName' => $entityName), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'contains', array('entity' => $entity), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getEventManager', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getConfiguration', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'isOpen', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getUnitOfWork', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getProxyFactory', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'initializeObject', array('obj' => $obj), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'getFilters', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'isFiltersStateClean', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'hasFilters', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return $this->valueHolderec4df->hasFilters();
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

        $instance->initializer70898 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderec4df) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderec4df = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderec4df->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, '__get', ['name' => $name], $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        if (isset(self::$publicProperties64d8e[$name])) {
            return $this->valueHolderec4df->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4df;

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

        $targetObject = $this->valueHolderec4df;
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
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4df;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderec4df;
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
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, '__isset', array('name' => $name), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4df;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderec4df;
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
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, '__unset', array('name' => $name), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4df;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderec4df;
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
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, '__clone', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        $this->valueHolderec4df = clone $this->valueHolderec4df;
    }

    public function __sleep()
    {
        $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, '__sleep', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;

        return array('valueHolderec4df');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer70898 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer70898;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer70898 && ($this->initializer70898->__invoke($valueHolderec4df, $this, 'initializeProxy', array(), $this->initializer70898) || 1) && $this->valueHolderec4df = $valueHolderec4df;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderec4df;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderec4df;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
