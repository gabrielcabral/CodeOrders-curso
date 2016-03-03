<?php
/**
 * Created by PhpStorm.
 * User: GABRIEL
 * Date: 03/03/2016
 * Time: 10:59
 */

namespace CodeOrders\V1\Rest\Orders;


use Zend\Db\TableGateway\AbstractTableGateway;

class OrdersRepository
{

    /**
     * @var AbstractTableGateway
     */
    private $tableGateway;
    /**
     * @var AbstractTableGateway
     */
    private $OrderItemTableGateway;

    public function __construct(AbstractTableGateway $tableGateway, AbstractTableGateway $OrderItemTableGateway)
    {

        $this->tableGateway = $tableGateway;
        $this->OrderItemTableGateway = $OrderItemTableGateway;
    }

}