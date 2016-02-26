<?php
/**
 * Created by PhpStorm.
 * User: GABRIEL
 * Date: 25/02/2016
 * Time: 11:23
 */

namespace CodeOrders\V1\Rest\Users;



use \Zend\Hydrator\HydratorInterface;

class UsersMapper extends  UsersEntity implements HydratorInterface
{

    public function extract($object)
    {
        return [
            'id'=> $object->id,
            'username'=> $object->username,
            'password'=> $object->password,
            'first_name'=> $object->first_name,
            'last_name'=> $object->last_name,
            'role'=> $object->role
        ];
    }


    public function hydrate(array $data, $object)
    {
        $object->id = $data['id'];
        $object->username = $data['username'];
        $object->password = $data['password'];
        $object->first_name = $data['first_name'];
        $object->last_name = $data['last_name'];
        $object->role = $data['role'];

        return $object;
    }
}