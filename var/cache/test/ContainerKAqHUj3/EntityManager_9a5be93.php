<?php

namespace ContainerKAqHUj3;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdce4f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3ae02 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd8726 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getConnection', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getMetadataFactory', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getExpressionBuilder', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'beginTransaction', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getCache', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'transactional', array('func' => $func), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'commit', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->commit();
    }

    public function rollback()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'rollback', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getClassMetadata', array('className' => $className), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'createQuery', array('dql' => $dql), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'createNamedQuery', array('name' => $name), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'createQueryBuilder', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'flush', array('entity' => $entity), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'clear', array('entityName' => $entityName), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->clear($entityName);
    }

    public function close()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'close', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->close();
    }

    public function persist($entity)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'persist', array('entity' => $entity), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'remove', array('entity' => $entity), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'refresh', array('entity' => $entity), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'detach', array('entity' => $entity), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'merge', array('entity' => $entity), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'contains', array('entity' => $entity), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getEventManager', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getConfiguration', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'isOpen', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getUnitOfWork', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getProxyFactory', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'initializeObject', array('obj' => $obj), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'getFilters', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'isFiltersStateClean', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'hasFilters', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return $this->valueHolderdce4f->hasFilters();
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

        $instance->initializer3ae02 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdce4f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdce4f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdce4f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, '__get', ['name' => $name], $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        if (isset(self::$publicPropertiesd8726[$name])) {
            return $this->valueHolderdce4f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdce4f;

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

        $targetObject = $this->valueHolderdce4f;
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
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdce4f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdce4f;
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
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, '__isset', array('name' => $name), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdce4f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdce4f;
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
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, '__unset', array('name' => $name), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdce4f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdce4f;
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
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, '__clone', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        $this->valueHolderdce4f = clone $this->valueHolderdce4f;
    }

    public function __sleep()
    {
        $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, '__sleep', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;

        return array('valueHolderdce4f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3ae02 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3ae02;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3ae02 && ($this->initializer3ae02->__invoke($valueHolderdce4f, $this, 'initializeProxy', array(), $this->initializer3ae02) || 1) && $this->valueHolderdce4f = $valueHolderdce4f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdce4f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdce4f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
