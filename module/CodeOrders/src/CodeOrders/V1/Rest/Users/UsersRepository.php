<?php
/**
 * Created by PhpStorm.
 * User: GABRIEL
 * Date: 25/02/2016
 * Time: 11:36
 */

namespace CodeOrders\V1\Rest\Users;

use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;

class UsersRepository
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