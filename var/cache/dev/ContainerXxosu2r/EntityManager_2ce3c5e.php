<?php

class EntityManager_2ce3c5e extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder685f0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer05bf8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2f672 = [
        
    ];

    public function getConnection()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getConnection', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getMetadataFactory', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getExpressionBuilder', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'beginTransaction', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getCache', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'transactional', array('func' => $func), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->transactional($func);
    }

    public function commit()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'commit', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->commit();
    }

    public function rollback()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'rollback', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getClassMetadata', array('className' => $className), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'createQuery', array('dql' => $dql), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'createNamedQuery', array('name' => $name), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'createQueryBuilder', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'flush', array('entity' => $entity), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'clear', array('entityName' => $entityName), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->clear($entityName);
    }

    public function close()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'close', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->close();
    }

    public function persist($entity)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'persist', array('entity' => $entity), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'remove', array('entity' => $entity), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'refresh', array('entity' => $entity), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'detach', array('entity' => $entity), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'merge', array('entity' => $entity), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'contains', array('entity' => $entity), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getEventManager', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getConfiguration', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'isOpen', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getUnitOfWork', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getProxyFactory', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'initializeObject', array('obj' => $obj), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'getFilters', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'isFiltersStateClean', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'hasFilters', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return $this->valueHolder685f0->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer05bf8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder685f0) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder685f0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder685f0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, '__get', ['name' => $name], $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        if (isset(self::$publicProperties2f672[$name])) {
            return $this->valueHolder685f0->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder685f0;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder685f0;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder685f0;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder685f0;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, '__isset', array('name' => $name), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder685f0;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder685f0;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, '__unset', array('name' => $name), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder685f0;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder685f0;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, '__clone', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        $this->valueHolder685f0 = clone $this->valueHolder685f0;
    }

    public function __sleep()
    {
        $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, '__sleep', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;

        return array('valueHolder685f0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer05bf8 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer05bf8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer05bf8 && ($this->initializer05bf8->__invoke($valueHolder685f0, $this, 'initializeProxy', array(), $this->initializer05bf8) || 1) && $this->valueHolder685f0 = $valueHolder685f0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder685f0;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder685f0;
    }


}
