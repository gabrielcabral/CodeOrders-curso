<?php
return array(
    'CodeOrders\\V1\\Rest\\Ptypes\\Controller' => array(
        'collection' => array(
            'description' => 'coleção de pagamentos',
            'GET' => array(
                'description' => 'return o tipo de pagamento',
                'response' => '',
            ),
        ),
        'description' => 'Formas de pagamentos',
        'entity' => array(
            'description' => 'tipo de pagamento',
            'GET' => array(
                'description' => 'return o tipo de pagamento',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes[/:ptypes_id]"
       }
   }
"id": "ID",
   "name": ""
}',
            ),
            'PATCH' => array(
                'request' => '{
   "id": "",
"name": ""
}',
            ),
        ),
    ),
);
