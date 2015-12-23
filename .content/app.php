<?php
/**
 * Configuration for application skeleton based on Panthera Framework 2
 *
 * @author Damian Kęska <damian@pantheraframework.org>
 */
defined('PF2_NAMESPACE') ?: define('PF2_NAMESPACE', 'ExampleAPP');

$defaultConfig = [
    'developerMode' => true,
    'enabledPackages' => [ 'BasePackage', 'Example' ],

    'Routing' => [
        'rootPath' => '/example-panthera-application/',
    ],

    'logging' => [
        'enabled' => true,
    ],

    'database' => [

        // sqlite
        'type' => 'SQLite3',
        'name' => 'database',

        // read-write user
        'host'     => null,
        'user'     => null,
        'password' => null,

        // read-only user
        'readOnlyUser'     => null,
        'readOnlyPassword' => null,

        'charset'          => 'utf-8',
        /*
        // mysql

        'type'     => 'MySQL',
        'host'     => 'localhost',
        'name'     => 'database',
        'user'     => 'username',
        'password' => 'password',

        'mysql_buffered_queries' => 50,
        'timeout'                => 60,
        'charset'                => 'utf8',
        */
    ],

    'application' => [
        'name'          => 'Example Application',
        'repository'    => 'https://github.com/Panthera-Framework/example-panthera-application',
        'repositoryKey' => '',
    ]
];

// if defined PHPUnit, initialize Panthera Framework 2 once again for test purposes
require_once __VENDOR_PATH__ . '/pantheraframework/panthera/lib/init.php';
