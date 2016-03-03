<?php
/**
 * Created by PhpStorm.
 * User: GABRIEL
 * Date: 29/02/2016
 * Time: 14:27
 */

namespace CodeOrders\V1\Rest\Orders;


use Zend\Db\TableGateway\TableGateway;
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

        $hydrator = new HydratingResultSet(new ClassMethods(), new OrderItemEntity());

        $tableGateway = new TableGateway('order_item',$dbAdapter, null ,$hydrator);

        return $tableGateway;
    }
}