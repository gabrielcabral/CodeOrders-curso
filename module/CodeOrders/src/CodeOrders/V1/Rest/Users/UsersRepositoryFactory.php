<?php
/**
 * Created by PhpStorm.
 * User: GABRIEL
 * Date: 25/02/2016
 * Time: 11:41
 */

namespace CodeOrders\V1\Rest\Users;


use CodeOrders\V1\Rest\Products\ProductsEntity;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class UsersRepositoryFactory implements FactoryInterface
{

    public  function createService(ServiceLocatorInterface $serviceLocator)
    {
       $dbAdapter = $serviceLocator->get('DbAdapter');

       $hydra = new HydratingResultSet(new ClassMethods(), new ProductsEntity());

       $tableGateway = new TableGateway('oauth_users',$dbAdapter, null , $hydra);

       $usersRepository = new UsersRepository($tableGateway);
       return $usersRepository;

    }

}