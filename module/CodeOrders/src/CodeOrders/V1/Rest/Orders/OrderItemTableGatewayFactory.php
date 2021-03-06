<?php
/**
 * Created by PhpStorm.
 * User: GABRIEL
 * Date: 29/02/2016
 * Time: 14:27
 */

namespace CodeOrders\V1\Rest\Orders;


use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class OrderItemTableGatewayFactory implements FactoryInterface
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

        $hydra = new HydratingResultSet(new ClassMethods(), new OrderItemEntity());

        $tableGateway = new TableGateway('order_items',$dbAdapter, null ,$hydra);

        return $tableGateway;
    }
}