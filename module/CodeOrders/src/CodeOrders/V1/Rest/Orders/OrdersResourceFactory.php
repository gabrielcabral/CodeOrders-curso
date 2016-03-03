<?php
namespace CodeOrders\V1\Rest\Orders;

class OrdersResourceFactory
{
    public function __invoke($services)
    {
        $ordesRepository = $services->get('CodeOrders\\V1\\Rest\\Orders\\OrdersRepository');
        return new OrdersResource($ordesRepository);
    }
}
