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

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dbAdapter = $serviceLocator->get('DbAdapter');

        //$usersMapper = new UsersMapper();

        $hydrator = new HydratingResultSet(new ClassMethods(), new UsersEntity());

        $tableGateway = new TableGateway('oauth_users', $dbAdapter, null, $hydrator);

        $usersRepository = new UsersRepository($tableGateway);

        return $usersRepository;

    }

}