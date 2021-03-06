<?php
namespace CodeOrders\V1\Rest\Orders;

class OrdersEntity
{
    protected $id;
    protected $client_id;
    protected $user_id;
    protected $ptype_id;
    protected $total;
    protected $status;
    protected $created_alt;
    protected $items;

    public function __construct()
    {
        $this->items =[];
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
        return $this;
    }

    /**
     * @param array $items
     */
    public function addItem($item)
    {
        $this->items[] = $item;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return OrdersEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param mixed $client_id
     * @return OrdersEntity
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     * @return OrdersEntity
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPtypeId()
    {
        return $this->ptype_id;
    }

    /**
     * @param mixed $ptype_id
     * @return OrdersEntity
     */
    public function setPtypeId($ptype_id)
    {
        $this->ptype_id = $ptype_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     * @return OrdersEntity
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return OrdersEntity
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAlt()
    {
        return $this->created_alt;
    }

    /**
     * @param mixed $created_alt
     * @return OrdersEntity
     */
    public function setCreatedAlt($created_alt)
    {
        $this->created_alt = $created_alt;
        return $this;
    }


}
