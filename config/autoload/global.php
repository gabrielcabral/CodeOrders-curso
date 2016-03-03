<?php
return array(
    'db' => array(
        'adapters' => array(
            'DbAdapter' => array(),
            'dbadapter' => array(),
            'dbapt' => array(),
        ),
    ),
    'router' => array(
        'routes' => array(
            'oauth' => array(
                'options' => array(
                    'spec' => '%oauth%',
                    'regex' => '(?P<oauth>(/oauth))',
                ),
                'type' => 'regex',
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'map' => array(
                'CodeOrders\\V1' => 'oauthdbadapter',
            ),
        ),
    ),
);
