<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.default_entity_manager' shared service.

if ($lazyLoad) {
    return $this->services['doctrine.orm.default_entity_manager'] = $this->createProxy('EntityManager_a83dd68', function () {
        return \EntityManager_a83dd68::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

$a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, array(0 => ($this->targetDirs[3].'/src/AppBundle/Entity'))), 'AppBundle\\Entity');

$b = new \Doctrine\ORM\Configuration();
$b->setEntityNamespaces(array('AppBundle' => 'AppBundle\\Entity'));
$b->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->load(__DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php')) && false ?: '_'});
$b->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->load(__DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php')) && false ?: '_'});
$b->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->load(__DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php')) && false ?: '_'});
$b->setMetadataDriverImpl($a);
$b->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$b->setProxyNamespace('Proxies');
$b->setAutoGenerateProxyClasses(true);
$b->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$b->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$b->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$b->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$b->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\ORM\Mapping\DefaultEntityListenerResolver()) && false ?: '_'});

$instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->load(__DIR__.'/getDoctrine_Dbal_DefaultConnectionService.php')) && false ?: '_'}, $b);

${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array())) && false ?: '_'}->configure($instance);

return $instance;