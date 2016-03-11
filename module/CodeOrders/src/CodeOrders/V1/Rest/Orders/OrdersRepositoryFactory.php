<?php
/**
 * Created by PhpStorm.
 * User: GABRIEL
 * Date: 03/03/2016
 * Time: 11:02
 */

namespace CodeOrders\V1\Rest\Orders;


use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class OrdersRepositoryFactory implements FactoryInterface
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

        $hydrator = new HydratingResultSet(new ClassMethods(), new OrdersEntity());

        $tableGateway = new TableGateway('orders', $dbAdapter, null, $hydrator);

        $ordersItemTableGateway = $serviceLocator->get('CodeOrders\\V1\\Rest\\Orders\\OrderItemTableGateway');
        $userRepository = $serviceLocator->get('CodeOrders\\V1\\Rest\\Users\\UsersRepository');

        return new OrdersRepository($tableGateway, $ordersItemTableGateway, $userRepository);

    }
}