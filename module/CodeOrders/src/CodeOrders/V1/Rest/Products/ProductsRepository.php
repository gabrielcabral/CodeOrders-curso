<?php
/**
 * Created by PhpStorm.
 * User: GABRIEL
 * Date: 26/02/2016
 * Time: 15:11
 */

namespace CodeOrders\V1\Rest\Products;


use Zend\Console\Request;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;
use Zend\Stdlib\Hydrator\ObjectProperty;
use CodeOrders\V1\Rest\Users\UsersRepository;
use ZendDeveloperTools\Collector\DbCollector;

class ProductsRepository
{
    /**
     * @var TableGatewayInterface
     */
    private $tableGateway;
    /**
     * @var UsersRepository
     */
    private $usersRepository;

    /**
     * @param TableGatewayInterface $tableGateway
     */
    public function __construct (TableGatewayInterface $tableGateway,UsersRepository $usersRepository)
    {
        $this->tableGateway = $tableGateway;
        $this->usersRepository = $usersRepository;
    }

    public function getUsersRepository()
    {
        return $this->usersRepository;
    }

    public function findAll()
    {
        $result =  $this->tableGateway->select();
        return $result;
    }

    public function find($id)
    {
        $resultSet = $this->tableGateway->select(['id' => (int)$id]);

        return $resultSet->current();
    }

    public function create ($data)
    {
        $hydrator = new ObjectProperty();
        $data = $hydrator->extract($data);

        $this->tableGateway->insert($data);
        $data['id']= $this->tableGateway->getLastInsertValue();

        return $data;
    }

    public function update ($id, $data)
    {
        $hydrator = new ObjectProperty();
        $data = $hydrator->extract($data);

        $this->tableGateway->update($data, array('id'=> $id));

        return $data;
    }


    public function delete($id)
    {
        $this->tableGateway->delete(['id' => (int)$id]);

        return true;
    }
}