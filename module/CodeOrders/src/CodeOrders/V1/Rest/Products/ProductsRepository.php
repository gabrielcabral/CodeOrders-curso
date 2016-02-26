<?php
/**
 * Created by PhpStorm.
 * User: GABRIEL
 * Date: 26/02/2016
 * Time: 15:11
 */

namespace CodeOrders\V1\Rest\Products;


use Zend\Db\TableGateway\TableGatewayInterface;

class ProductsRepository
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function findAll()
    {
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);

        return new UsersCollection($paginatorAdapter);
    }

    public function find($id)
    {
        $resultSet =  $this->tableGateway->select(['id'=> (int)$id]);
        return $resultSet->current();
    }
}