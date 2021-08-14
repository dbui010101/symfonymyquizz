<?php

namespace ContainerMvAU4LG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3e291 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd9c90 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5deca = [
        
    ];

    public function getConnection()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getConnection', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getMetadataFactory', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getExpressionBuilder', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'beginTransaction', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getCache', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'transactional', array('func' => $func), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->transactional($func);
    }

    public function commit()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'commit', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->commit();
    }

    public function rollback()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'rollback', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getClassMetadata', array('className' => $className), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'createQuery', array('dql' => $dql), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'createNamedQuery', array('name' => $name), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'createQueryBuilder', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'flush', array('entity' => $entity), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'clear', array('entityName' => $entityName), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->clear($entityName);
    }

    public function close()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'close', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->close();
    }

    public function persist($entity)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'persist', array('entity' => $entity), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'remove', array('entity' => $entity), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'refresh', array('entity' => $entity), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'detach', array('entity' => $entity), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'merge', array('entity' => $entity), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'contains', array('entity' => $entity), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getEventManager', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getConfiguration', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'isOpen', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getUnitOfWork', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getProxyFactory', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'initializeObject', array('obj' => $obj), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'getFilters', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'isFiltersStateClean', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'hasFilters', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return $this->valueHolder3e291->hasFilters();
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

        $instance->initializerd9c90 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3e291) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3e291 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3e291->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, '__get', ['name' => $name], $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        if (isset(self::$publicProperties5deca[$name])) {
            return $this->valueHolder3e291->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e291;

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

        $targetObject = $this->valueHolder3e291;
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
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e291;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3e291;
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
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, '__isset', array('name' => $name), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e291;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3e291;
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
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, '__unset', array('name' => $name), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e291;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3e291;
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
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, '__clone', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        $this->valueHolder3e291 = clone $this->valueHolder3e291;
    }

    public function __sleep()
    {
        $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, '__sleep', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;

        return array('valueHolder3e291');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd9c90 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd9c90;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd9c90 && ($this->initializerd9c90->__invoke($valueHolder3e291, $this, 'initializeProxy', array(), $this->initializerd9c90) || 1) && $this->valueHolder3e291 = $valueHolder3e291;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3e291;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3e291;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
