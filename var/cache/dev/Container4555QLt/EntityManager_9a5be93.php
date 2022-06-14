<?php

namespace Container4555QLt;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc9ef2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd6062 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc4983 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getConnection', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getMetadataFactory', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getExpressionBuilder', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'beginTransaction', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getCache', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'transactional', array('func' => $func), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'commit', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->commit();
    }

    public function rollback()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'rollback', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getClassMetadata', array('className' => $className), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'createQuery', array('dql' => $dql), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'createNamedQuery', array('name' => $name), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'createQueryBuilder', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'flush', array('entity' => $entity), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'clear', array('entityName' => $entityName), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->clear($entityName);
    }

    public function close()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'close', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->close();
    }

    public function persist($entity)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'persist', array('entity' => $entity), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'remove', array('entity' => $entity), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'refresh', array('entity' => $entity), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'detach', array('entity' => $entity), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'merge', array('entity' => $entity), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'contains', array('entity' => $entity), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getEventManager', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getConfiguration', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'isOpen', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getUnitOfWork', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getProxyFactory', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'initializeObject', array('obj' => $obj), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'getFilters', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'isFiltersStateClean', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'hasFilters', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return $this->valueHolderc9ef2->hasFilters();
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

        $instance->initializerd6062 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc9ef2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc9ef2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc9ef2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, '__get', ['name' => $name], $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        if (isset(self::$publicPropertiesc4983[$name])) {
            return $this->valueHolderc9ef2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9ef2;

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

        $targetObject = $this->valueHolderc9ef2;
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
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9ef2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc9ef2;
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
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, '__isset', array('name' => $name), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9ef2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc9ef2;
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
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, '__unset', array('name' => $name), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9ef2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc9ef2;
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
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, '__clone', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        $this->valueHolderc9ef2 = clone $this->valueHolderc9ef2;
    }

    public function __sleep()
    {
        $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, '__sleep', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;

        return array('valueHolderc9ef2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd6062 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd6062;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd6062 && ($this->initializerd6062->__invoke($valueHolderc9ef2, $this, 'initializeProxy', array(), $this->initializerd6062) || 1) && $this->valueHolderc9ef2 = $valueHolderc9ef2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc9ef2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc9ef2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
