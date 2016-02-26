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

class ProductsRepositoryFactory
{
    public  function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dbAdapter = $serviceLocator->get('DbAdapter');

        $hydra = new HydratingResultSet(new ClassMethods(), new UsersEntity());

        $tableGateway = new TableGateway('products',$dbAdapter, null , $hydra);

        $productsRepository = new UsersRepository($tableGateway);
        return $productsRepository;

    }
}