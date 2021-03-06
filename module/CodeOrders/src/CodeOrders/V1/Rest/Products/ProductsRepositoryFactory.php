<?php
/**
 * Created by PhpStorm.
 * User: GABRIEL
 * Date: 26/02/2016
 * Time: 15:11
 */

namespace CodeOrders\V1\Rest\Products;


use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ProductsRepositoryFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dbAdapter = $serviceLocator->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new ProductsEntity());

        $tableGateway = new TableGateway('products', $dbAdapter, null, $hydrator);

        $userRepository = $serviceLocator->get('CodeOrders\\V1\\Rest\\Users\\UsersRepository');

        return new ProductsRepository($tableGateway, $userRepository);

    }
}